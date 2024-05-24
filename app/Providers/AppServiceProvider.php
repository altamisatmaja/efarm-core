<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(\Illuminate\Http\Request $request)
    {
        if (!empty(env('NGROK_URL')) && $request->server->has('HTTP_X_ORIGINAL_HOST')) {
            $this->app['url']->forceRootUrl(env('NGROK_URL'));
        }

        Validator::extend('lowercase_unique_alpha_num', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[a-z0-9]+$/', $value) && !\App\Models\User::whereRaw('LOWER(username) = ?', [strtolower($value)])->exists();
        });

        Validator::extend('minimum_age', function ($attribute, $value, $parameters, $validator) {
            $dob = \Carbon\Carbon::createFromFormat('Y-m-d', $value);
            $now = \Carbon\Carbon::now();
            $age = $dob->diffInYears($now);

            return $age >= $parameters[0];
        });


        Paginator::defaultView('vendor.pagination.tailwind');
        Paginator::defaultSimpleView('vendor.pagination.tailwind');
        Blade::directive('currency', function ( $expression ) { return "Rp <?php echo number_format($expression,0,',','.'); ?>"; });

    }
}

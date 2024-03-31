<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                $token = Auth::guard('api')->attempt(['email' => $finduser->email, 'password' => $finduser->password]);
                cookie()->queue(cookie('token-customer', $token, 120));
                return redirect('/customer/dashboard');
            } else {
                $newUser = User::create([
                    'nama' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'id_user_role' => 3,
                    'social_type' => 'google',
                    'password' => bcrypt('my-google'),
                    'konfirmasi_password' => bcrypt('my-google'),
                ]);

                Auth::login($newUser);
                $token = Auth::guard('api')->attempt(['email' => $finduser->email, 'password' => $finduser->password]);
                cookie()->queue(cookie('token-customer', $token, 120));
                return redirect('/customer/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

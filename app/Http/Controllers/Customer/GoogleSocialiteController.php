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
            $userexists = User::where('social_id', $user->id)->first();

            if ($userexists) {
                Auth::login($userexists);
                $token = Auth::guard('api')->login($userexists);
                echo "<script>
                    localStorage.setItem('token-customer', '" . $token . "');
                    window.location.href = '/customer/dashboard';
                </script>";
            } else {
                $emptyuser = User::create([
                    'nama' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'id_user_role' => 3,
                    'social_type' => 'google',
                    'password' => bcrypt($user->password),
                    'konfirmasi_password' => bcrypt($user->password),
                ]);

                Auth::login($emptyuser);
                $token = Auth::guard('api')->login($emptyuser);
                echo "<script>
                    localStorage.setItem('token-customer', '" . $token . "');
                    window.location.href = '/customer/dashboard';
                </script>";
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

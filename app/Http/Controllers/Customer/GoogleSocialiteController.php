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
                $token = Auth::guard('api')->login($finduser);
                echo "<script>
                    localStorage.setItem('token-customer', '" . $token . "');
                    window.location.href = '/customer/dashboard';
                </script>";
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
                $token = Auth::guard('api')->login($newUser);
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

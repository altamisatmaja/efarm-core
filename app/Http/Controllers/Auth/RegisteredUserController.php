<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|lowercase_unique_alpha_num',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'konfirmasi_password' => 'required|same:password|no_css_injection',
        ], [
            'username.required' => 'Wajib diisi',
            'username.lowercase_unique_alpha_num' => 'Username harus berupa angka, huruf, tanpa spasi, dan tanpa karakter',
            'nama.required' => 'Wajib diisi',
            'email.required' => 'Wajib diisi',
            'password.required' => 'Wajib diisi',
            'password.min' => 'Minimal terdiri 6 karakter',
            'konfirmasi_password.required' => 'Wajib diisi',
            'konfirmasi_password.min' => 'Panjang konfirmasi password minimal 6 karakter',
            'konfirmasi_password.same' => 'Masukkan Konfirmasi password sesuai dengan password',
        ]);

        $user = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

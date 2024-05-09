<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterCustomerController extends Controller
{
    public function index()
    {
        return view('customer.auth.register');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('customer.verify.email')->with('status', 'Akun berhasil dibuat, silahkan verifikasi');
    }

    public function verify_email(Request $request)
    {
        return view('verify');
    }

    public function show(Request $request)
    {
        $id = $request->route('id');
        $hash = $request->route('hash');

        $user = User::findOrFail($id);
        $user->update([
            'email_verified_at' => now(),
        ]);

        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            abort(403);
        }

        $user->email_verified_at = now();
        $user->save();

        if ($user->hasVerifiedEmail()) {
            return redirect('/');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route('customer.verify.email')->with('status', 'Email berhasil diverifikasi');

    }
}

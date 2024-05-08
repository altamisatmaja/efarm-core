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

    public function verify_email()
    {
        return view('verify');
    }

    public function show(Request $request)
    {
        // Ambil ID dan hash dari URL
        $id = $request->route('id');
        $hash = $request->route('hash');

        // Proses verifikasi email menggunakan ID dan hash
        $user = User::findOrFail($id);

        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            // Jika hash tidak cocok, mungkin URL sudah kadaluarsa atau tidak valid
            abort(403);
        }

        if ($user->hasVerifiedEmail()) {
            // Jika email sudah diverifikasi sebelumnya, Anda bisa redirect ke halaman lain atau melakukan tindakan lain
            return redirect('/');
        }

        // Verifikasi email
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        // Redirect ke halaman verifikasi sukses
        return redirect()->route('customer.verify.email')->with('status', 'Email berhasil diverifikasi');
    }
}

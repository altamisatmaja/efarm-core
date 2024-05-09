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

    public function email_verified(Request $request, $id){
        $user = User::findOrFail($id);
    
        // $input = $request->only(['email_verified_at']);
        // $input['email_verified_at'] = now();
        
        // Melakukan update data
        // $verify = $user->update($input);
        $user->email_verified_at = now();
        $p = $user->save();
        
        if ($p){
            return redirect()->back();
        }
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

    public function verify_email(Request $request, $id)
    {
        $user = User::find($id);
        return view('verify', compact('user'));
    }

    public function show(Request $request)
    {
        $id = $request->route('id');
        $hash = $request->route('hash');
    
        $user = User::findOrFail($id);
    
        // Check if the hash matches
        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            abort(403);
        }
    
        // Mark the email as verified
        if (!$user->hasVerifiedEmail()) {
            $user->email_verified_at = now();
            $user->save();
    
            // Trigger 'verified' event
            event(new Verified($user));
    
            // Redirect with 'id' parameter
            return redirect()->route('customer.verify.email', $id)->with('status', 'Email berhasil diverifikasi');
        }
    }
    
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PartnerAdminController extends Controller
{
    public function list(){
        $partner = Partner::with('users')->get();

        return view('admin.pages.partner.index', compact('partner'));
    }

    public function show($id){
        $partner = Partner::with('users')->find($id);

        return view('admin.pages.partner.show', compact('partner'));
    }

    public function submission(){
        $partner = Partner::with('users')->where('status', 'Belum terverifikasi')->get();
        
        return view('admin.pages.partner.submission', compact('partner'));
    }

    public function verified(){
        return view('admin.pages.partner.verified');
    }

    /**
     * Handling status for verif
     */
    public function handle_status(Request $request ,$id){
        try {
            $partner = Partner::findOrFail($id);
            dd($partner);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan:'. $e->getMessage());
        }
    }

    public function nonactive(Request $request, $id){
        try {
            $partner = Partner::findOrFail($id);

            if($partner){
                $validator = Validator::make($request->all(), [
                    'status' => 'required'
                ]);

                
            }

            return redirect('admin.partner')->with('success', 'Partner telah diverifikasi, kontak partner supaya melakukan pengecekan di email yang terdaftar');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: '.$e->getMessage());
        }
    }

    public function verify(Request $request) {
        $user = User::where('email', $request->email)->first();
    
        if ($user) {
            $user->update([
                'username' => $request->nama,
                'nama' => $request->username,
                'password' => $request->password,
            ]);
            
    
            Auth::login($user);
    
            return redirect()->route('customer.verify.email')->with('status', 'Akun berhasil diperbarui');
        } else {
            return redirect()->route('customer.verify.email')->with('status', 'Akun tidak ditemukan');
        }
    }
    

    public function verify_partner(Request $request)
    {
        $id = $request->route('id');
        $hash = $request->route('hash');

        $user = User::findOrFail($id);

        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            abort(403);
        }

        if ($user->hasVerifiedEmail()) {
            return redirect('/');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route('partner.verify.email')->with('status', 'Email berhasil diverifikasi');
    }
}

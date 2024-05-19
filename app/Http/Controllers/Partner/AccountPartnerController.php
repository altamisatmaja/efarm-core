<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $partner = Auth::user();
        // dd($partner);
        return view('partner.pages.profile.account', compact('partner'));   
    }

    /**
     * View account
     */

    public function account_edit_view(){
        $user = Auth::user()->partner;
        $partner = Auth::user();
        return view('partner.pages.profile.edit', compact('partner', 'user'));
    }

    public function information_view(){
        $partner = Auth::user();
        $partners = Auth::user()->partner;
        return view('partner.pages.profile.information', compact('partner', 'partners'));
    }

    public function address_view(){
        $partner = Auth::user();
        $partners = Auth::user()->partner;
        return view('partner.pages.profile.address', compact('partner', 'partners'));
    }

    public function rekening_view(){
        $partner = Auth::user()->partner;
        return view('partner.pages.profile.rekening', compact('partner'));
    }

    public function rekening_store(Request $request){
        $partner = Auth::user()->partner;
        
        $request->validate([
            'nomor_rekening' => 'required',
            'nama_bank' => 'required',
            'nama_pemilik_rekening' => 'required',
        ]);

        $partner->create($request->all());

        return redirect()->back()->with('success', 'Data rekening berhasil ditambahkan');
    }

    /**
     * Ubah data akun partner
     */
    public function update_account(Request $request){
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);
        
        $user = Auth::user();

        $user->update($request->all());

        return redirect()->back()->with('success', 'Informasi akun berhasil diupdate');
    }

    /**
     * Ubah data informasi partner
     */
    public function update_information(Request $request){
        try {
            $request->validate([
                'nama_partner' => 'required',
                'nama_perusahaan_partner' => 'required',
                'lama_peternakan_berdiri' => 'required',
            ]);
    
            $user = Auth::user()->partner;
    
            $user->update($request->all());
    
            return redirect()->back()->with('success', 'Informasi akun berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Ubah data informasi partner
     */
    public function update_address(Request $request){
        try {
            $request->validate([
                'alamat_partner' => 'required',
            ]);
    
            $user = Auth::user()->partner;
    
            $user->update($request->all());
    
            return redirect()->back()->with('success', 'Informasi alamat berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

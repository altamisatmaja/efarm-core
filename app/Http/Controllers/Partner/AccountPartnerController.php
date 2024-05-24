<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AccountPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        return view('partner.pages.profile.account', compact('partner'));
    }

    /**
     * View account
     */

    public function account_edit_view(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        return view('partner.pages.profile.edit', compact('partner', 'user'));
    }

    public function information_view(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        dd(json_encode($partner));
        return view('partner.pages.profile.information', compact('partner'));
    }

    public function address_view(){
        $partner = Auth::user();
        $partners = Auth::user()->partner;
        return view('partner.pages.profile.address', compact('partner', 'partners'));
    }

    public function rekening_view(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        return view('partner.pages.profile.rekening', compact('partner'));
    }

    public function rekening_store(Request $request){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

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

    public function update_password(Request $request){
        $request->validate([
            'password' => 'required',
        ]);


        $user = Auth::user();

        $user->update($request->all());

        return redirect()->back()->with('success', 'Password berhasil di ubah');
    }

    /**
     * Ubah data informasi partner
     */
    public function update_information(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'nama_partner' => 'required|max:16|min:5',
                'nama_perusahaan_partner' => 'required|max:16|min:5',
                'lama_peternakan_berdiri' => 'required',
                'no_hp' => 'required|min:7|max:14'
            ], [
                'nama_partner.required' => 'Nama partner wajib diisi',
                'nama_partner.min' => 'Nama partner minimal 5 karakter',
                'nama_partner.max' => 'Nama partner maksimal 16 karakter',
                'nama_perusahaan_partner.min' => 'Nama perusahaan partner minimal 5 karakter',
                'nama_perusahaan_partner.max' => 'Nama perusahaan partner maksimal 16 karakter',
                'nama_perusahaan_partner.required' => 'Nama perusahaan partner wajib diisi',
                'lama_peternakan_berdiri.required' => 'Lama peternakan berdiri wajib diisi',
                'no_hp.required' => 'Nomor handphone wajib diisi',
                'no_hp.min' => 'Nomor handphone minimal 7 angka',
                'no_hp.max' => 'Nomor handphone maksimal 14 angka',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $partner->update($request->all());

            return redirect()->route('partner.account')->with('success', 'Informasi akun berhasil diupdate');
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

            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $partner->update($request->all());

            return redirect()->back()->with('success', 'Informasi alamat berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

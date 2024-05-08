<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnerAdminController extends Controller
{
    public function list(){
        $partner = Partner::with('users')->get();

        return view('admin.pages.partner.index', compact('partner'));
    }

    public function show($id){
        $partner = Partner::find($id);

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
}

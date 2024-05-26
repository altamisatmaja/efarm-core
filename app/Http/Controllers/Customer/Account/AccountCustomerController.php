<?php

namespace App\Http\Controllers\Customer\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AccountCustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();

        return view('customer.profile.layouts.index', compact('user'));
    }

    public function address(){
        $user = Auth::user();
        return view('customer.profile.address', compact('user'));
    }

    public function information(){
        $user = Auth::user();
        return view('customer.profile.information', compact('user'));
    }

    public function account(){
        $user = Auth::user();
        return view('customer.profile.account', compact('user'));
    }

    public function update_address_account(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'provinsi_user' => 'required',
                'kabupaten_user' => 'required',
                'kecamatan_user' => 'required',
                'kelurahan_user' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'alamat_lengkap' => 'required'
            ]);

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->route('customer.account.address')->with('success', 'Data produk berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data gagal produk berhasil diubah');
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update_information_account(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'no_telp' => 'required',
            ]);

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->route('customer.account.information')->with('success', 'Data produk berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data gagal produk berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_email(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'email' => 'required',
            ]);

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data email berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal email berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_password(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'password' => 'required',
            ]);

            $input = $request->except(['_token', '_method']);
            $input['password'] = bcrypt($request->password);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data password berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal password berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_detail_account(Request $request){
        try {
            $user = auth()->user();
            if (!$user) {
                return redirect()->back()->with('error', 'Data user tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'username' => 'required',
                'profile_photo_path' => 'required',
            ]);

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('profile_photo_path')) {
                File::delete('uploads/' . $user->profile_photo_path);

                $gambar = $request->file('profile_photo_path');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['profile_photo_path'] = $nama_gambar;
            } else {
                unset($input['profile_photo_path']);
            }

            $user->update($input);

            if ($user) {
                return redirect()->route('customer.account.information')->with('success', 'Data akun berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data akun gagal diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update_foto_profil(Request $request){
        try {
            $user = auth()->user();
            if (!$user) {
                return redirect()->back()->with('error', 'Data user tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'profile_photo_path' => 'required',
            ]);

            // dd($request->all());

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('profile_photo_path')) {
                File::delete('uploads/' . $user->profile_photo_path);

                $gambar = $request->file('profile_photo_path');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['profile_photo_path'] = $nama_gambar;
            } else {
                unset($input['profile_photo_path']);
            }

            $user->update($input);

            if ($user) {
                return redirect()->back()->with('success', 'Data akun berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data akun gagal diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

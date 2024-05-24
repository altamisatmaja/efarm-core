<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class SubmissionController extends Controller
{
    public function submission()
    {
        $provinsiResponse = Http::get('https://ibnux.github.io/data-indonesia/provinsi.json');
        if ($provinsiResponse->successful()) {
            $provinsi = $provinsiResponse->json();
        } else {
            $provinsi = [];
        }

        return view('pages.partner.submission', compact('provinsi'));
    }

    public function getKabupaten(Request $request)
    {
        $selectProvince = $request->input('provinsi');

        $kabupaten = Http::get('https://ibnux.github.io/data-indonesia/kabupaten/' . $selectProvince . '.json')->json();

        return response()->json($kabupaten);
    }

    public function getKecamatan(Request $request)
    {
        $selectKabupaten = $request->input('kabupaten');

        $kecamatan = Http::get('https://ibnux.github.io/data-indonesia/kecamatan/' . $selectKabupaten . '.json')->json();

        return response()->json($kecamatan);
    }

    public function getKelurahan(Request $request)
    {
        $selectKecamatan = $request->input('kecamatan');

        $kelurahan = Http::get('https://ibnux.github.io/data-indonesia/kelurahan/' . $selectKecamatan . '.json')->json();

        return response()->json($kelurahan);
    }

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string',
                'username' => 'required|string|lowercase_unique_alpha_num',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|min:6',
                'konfirmasi_password' => 'required|same:password',
                'nama_partner' => 'required|min:4',
                'nama_perusahaan_partner' => 'required|min:4',
                'provinsi_partner' => 'required',
                'kabupaten_partner' => 'required',
                'kecamatan_partner' => 'required',
                'kelurahan_partner' => 'required',
                'alamat_partner' => 'required',
                'foto_profil' => 'required|image|mimes:jpg,png,jpeg,webp',
                'foto_peternakan' => 'required|image|mimes:jpg,png,jpeg,webp',
                'lama_peternakan_berdiri' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'status' => 'required',
                'tanggal_lahir' => 'required|minimum_age:18',
                'jenis_kelamin' => 'required',
            ], [
                'nama.required' => 'Nama wajib diisi',
                'nama.string' => 'Nama harus berupa angka dan huruf',
                'username.required' => 'Username wajib diisi',
                'username.string' => 'Username harus berupa angka dan huruf',
                'username.lowercase_unique_alpha_num' => 'Username harus berupa angka, huruf, tanpa spasi, dan tanpa karakter',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Email harus diisi sesuai format email',
                'email.unique' => 'Email sudah pernah didaftarkan',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Panjang password minimal 6 karakter',
                'konfirmasi_password.min' => 'Panjang konfirmasi password minimal 6 karakter',
                'konfirmasi_password.same' => 'Masukkan Konfirmasi password sesuai dengan password',
                'nama_partner.required' => 'Nama partner wajib diisi',
                'nama_partner.min' => 'Panjang nama partner minimal 4 karakter',
                'nama_perusahaan_partner.required' => 'Nama perusahaan partner wajib diisi',
                'nama_perusahaan_partner.min' => 'Panjang nama perusahaan partner minimal 4 karakter',
                'provinsi_partner.required' => 'Provinsi wajib diisi',
                'kabupaten_partner.required' => 'Kabupaten wajib diisi',
                'kecamatan_partner.required' => 'Kecamatan wajib diisi',
                'kelurahan_partner.required' => 'Kelurahan wajib diisi',
                'alamat_partner.required' => 'Alamat wajib diisi',
                'foto_profil.required' => 'Foto profil wajib diisi',
                'foto_profil.image' => 'Foto profil harus berupa gambar dengan format jpg, png, jpeg, dan webp',
                'foto_peternakan.required' => 'Foto peternakan wajib diisi',
                'foto_peternakan.image' => 'Foto peternakan harus berupa gambar dengan format jpg, png, jpeg, dan webp',
                'lama_peternakan_berdiri.required' => 'Lama peternakan berdiri wajib diisi',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
                'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
                'tanggal_lahir.minimum_age' => 'Usia minimal 18 tahun',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user = User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'email_verified_at' => now()
            ]);

            $id_user = $user->id;

            if($request->has('foto_profil')){
                $gambar = $request->file('foto_profil');
                $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $partner['foto_profil'] = $nama_gambar;
            }

            if($request->has('foto_peternakan')){
                $gambar = $request->file('foto_peternakan');
                $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $partner['foto_peternakan'] = $nama_gambar;
            }

            $partner = Partner::create([
                'id_user' => $id_user,
                'nama_partner' => $request->nama_partner,
                'nama_perusahaan_partner' => $request->nama_perusahaan_partner,
                'provinsi_partner' => $request->provinsi_partner,
                'kabupaten_partner' => $request->kabupaten_partner,
                'kecamatan_partner' => $request->kecamatan_partner,
                'kelurahan_partner' => $request->kelurahan_partner,
                'alamat_partner' => $request->alamat_partner,
                'foto_profil' => $request->foto_profil,
                'foto_peternakan' => $request->foto_peternakan,
                'lama_peternakan_berdiri' => $request->lama_peternakan_berdiri,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'status' => $request->status,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);

            if ($partner) {
                return redirect()->back()->with('success', 'Berhasil mengajukan sebagai partner, silahkan menunggu validasi dari admin');
            } else {
                return redirect()->back()->with('status', 'Gagal mengajukan sebagai partner, silahkan ulangi lagi');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function getAlamat() {}

}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TestimonialCustomerController extends Controller
{
    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
            'nama_testimoni',
            'deskripsi',
            'gambar',
            'id_user',
            'id_products',
            'membantu',
            'slug_testimonial'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            if ($request->has('gambar_hewan')) {
                $gambar = $request->file('gambar_hewan');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_hewan'] = $nama_gambar;
            }

            $slug = $this->generateSlug($input['nama_testimoni']);

            $input['slug_product'] = $slug;
            $testimonial = Testimonial::create($input);

            if ($testimonial) {
                return redirect()->back()->with('success', 'Data testimoni berhasil ditambahkan');
            } else {
                return redirect()->back()->with('errors', 'Data gagal testimoni berhasil ditambahkan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $slug_testimoni){
        try {
            $testimonial = Testimonial::where('slug_testimoni', $slug_testimoni)->first();
            // dd($testimonial);
    
            if (!$testimonial) {
                return redirect()->back()->with('error', 'Data testimonial tidak ditemukan');
            }
    
            $validator = Validator::make($request->all(), [
                'nama_testimoni',
                'deskripsi',
                'gambar',
                'slug_testimonial'
                ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            $input = $request->except(['_token', '_method' ]);
    
            if ($request->hasFile('gambar')) {
                File::delete('uploads/' . $testimonial->gambar);
    
                $gambar = $request->file('gambar');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar'] = $nama_gambar;
            } else {
                unset($input['gambar']);
            }
    
            $slug = $this->generateSlug($input['nama_testimoni']);
            $input['slug_testimoni'] = $slug;
            $testimonial->update($input);
    
            if ($testimonial) {
                return redirect()->back()->with('success', 'Data testimoni berhasil ditambahkan');
            } else {
                return redirect()->back()->with('errors', 'Data gagal testimoni berhasil ditambahkan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function generateSlug($nama_testimoni)
    {
        try {
            $slug = strtolower($nama_testimoni);
            $slug = str_replace(' ', '-', $slug);

            return $slug;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function show($slug_testimoni){
        $testimonial = Testimonial::where('slug_testimoni', $slug_testimoni)->first();

        return $testimonial;
    }
}

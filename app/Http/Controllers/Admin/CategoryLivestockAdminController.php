<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryLivestockAdminController extends Controller
{
    public function add(){
        return view('admin.pages.category_livestock.create');
    }

    public function show($slug){
        $categorylivestock = CategoryLivestock::where('slug', $slug)->first();

        // dd($categorylivestock);
        return view('admin.pages.category_livestock.edit', compact('categorylivestock'));
    }

    public function list(){
        $categorylivestock = CategoryLivestock::all();

        return view('admin.pages.category_livestock.index', compact('categorylivestock'));
    }

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'nama_kategori_hewan' => 'required',
                'deskripsi_kategori_hewan' => 'required',
                'gambar_kategori_hewan' => 'required|image|mimes:jpg,png,jpeg,webp',
                'slug' => 'required',
            ]);
    
            $input = $request->all();
    
            if($request->has('gambar_kategori_hewan')){
                $gambar = $request->file('gambar_kategori_hewan');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_kategori_hewan'] = $nama_gambar;
            }
    
            $slug = $this->generateSlug($input['nama_kategori_hewan']);
            $input['slug'] = $slug;
    
            CategoryLivestock::create($input);
    
            return redirect()->route('admin.categorylivestock.list')->with('success', 'Data kategori hewan berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        } 
    }

    public function update(Request $request, $slug){
        $categorylivestock = CategoryLivestock::where('slug', $slug);

        $validator = Validator::make($request->all(), [
                'nama_kategori_hewan' => 'required',
                'deskripsi_kategori_hewan' => 'required',
                'gambar_kategori_hewan' => 'required|image|mimes:jpg,png,jpeg,webp',
                'slug' => 'required',
        ]);

        $input = $request->except(['_token', '_method' ]);
        
        if($request->hasFile('gambar_kategori_hewan')){
            File::delete('uploads/'.$categorylivestock->gambar_kategori_hewan);
            $gambar = $request->file('gambar_kategori_hewan');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_kategori_hewan'] = $nama_gambar;
        } else {
            unset($input['gambar_kategori_hewan']);
        }

        $slug = $this->generateSlug($input['nama_kategori_hewan']);
        $input['slug'] = $slug;

        $categorylivestock->update($input);

        return redirect()->route('admin.categorylivestock.list')->with('success', 'Data kategori hewan berhasil diubah');
    }

    public function destroy($slug){
        try {
            $categorylivestock = CategoryLivestock::where('slug', $slug)->first();

            if ($categorylivestock) {
                File::delete('uploads/' . $categorylivestock->gambar_kategori_product);

                $categorylivestock->delete();

                return redirect()->route('admin.categorylivestock.list')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('admin.categorylivestock.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function generateSlug($nama_product)
    {
        $slug = strtolower($nama_product);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}

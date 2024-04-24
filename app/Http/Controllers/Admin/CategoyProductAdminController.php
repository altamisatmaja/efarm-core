<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoyProductAdminController extends Controller
{
    public function index(){
        return view('admin.pages.category_product');
    }

    public function list(){
        $categoryproduct = CategoryProduct::all();

        return view('admin.pages.category_product.index', compact('categoryproduct'));
    }

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'nama_kategori_product' => 'required',
                'deskripsi_kategori_product' => 'required',
                'gambar_kategori_product' => 'required|image|mimes:jpg,png,jpeg,webp',
                'slug_kategori_product' => 'required',
            ]);
    
            $input = $request->all();
    
            if($request->has('gambar_kategori_product')){
                $gambar = $request->file('gambar_kategori_product');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_kategori_product'] = $nama_gambar;
            }
    
            $slug = $this->generateSlug($input['nama_kategori_product']);
            $input['slug_kategori_product'] = $slug;
    
            CategoryProduct::create($input);
    
            return redirect()->route('partner.category_product.list')->with('success', 'Data kategori product berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }   
    }

    public function update(Request $request, $slug_kategori_product){
        $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product);
        
        // if($request->hasFile('gambar_kategori_product')){
        //     File::delete('uploads/'.$category->gambar_kategori_product);
        //     $gambar = $request->file('gambar_kategori_product');
        //     $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
        //     $gambar->move('uploads', $nama_gambar);
        //     $input['gambar_kategori_product'] = $nama_gambar;
        // } else {
        //     unset($input['gambar_kategori_product']);
        // }
    }

    public function destory(){

    }

    public function generateSlug($nama_product)
    {
        $slug = strtolower($nama_product);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}

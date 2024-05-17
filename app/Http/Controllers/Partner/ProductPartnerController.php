<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductPartnerController extends Controller
{
    public function index(){
        $user = Auth::user();
        // dd($user);
        $partner = Partner::where('id_user', $user->id)->first();
        // dd($partner);
        $product = Product::with('typelivestocks', 'gender_livestocks', 'categoryproduct', 'categorylivestocks', 'testimonial', 'reviews')->where('id_partner', $partner->id)->where('status', 'Aktif')->get();
        // dd($product);
        $productdata = $product->map(function($product){
            return [
                'nama_product' => $product->nama_product,
                'nama_kategori_product' => $product->categoryproduct->first()->nama_kategori_product,
                'harga_product' => $product->harga_product,
                'gambar_hewan' => $product->gambar_hewan,
                'lahir_hewan' => $product->lahir_hewan,
                'nama_gender' => $product->gender_livestocks->first()->nama_gender,
                'berat_hewan_ternak' => $product->berat_hewan_ternak,
                'stok_hewan_ternak' => $product->stok_hewan_ternak,
                'terjual' => $product->terjual,
                'deskripsi_product' => $product->deskripsi_product,
                'nama_jenis_hewan' => $product->typelivestocks->first()->nama_jenis_hewan,
                'nama_kategori_hewan' => $product->categorylivestocks->first()->nama_kategori_hewan,
                'created_at' => $product->created_at,
                'slug_product' => $product->slug_product,
            ];
        });

        dd($productdata);

        return view('partner.pages.product.list', compact('partner', 'categoryproduct', 'typelivestocks', 'gender_livestocks', 'partnerall'));
    }

    public function create(){

    }

    public function store(Request $request){
        
    }

    public function show($slug_product){
        
    }

    public function edit(){
        
    }

    public function update(Request $request, $slug_product){
        
    }

    public function destory(){
        
    }
}

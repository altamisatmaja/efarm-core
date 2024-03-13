<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api')->except(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori =  KategoriProduct::all();

        return response()->json([
            'data' => $kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori_product' => 'required',
            'deskripsi_kategori_product' => 'required',
            'gambar_kategori_product' => 'required|image|mimes:jpg,png,jpeg,webp',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if($request->has('gambar_kategori_product')){
            $gambar = $request->file('gambar_kategori_product');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_kategori_product'] = $nama_gambar;
        }

        $kategori = KategoriProduct::create($input);

        return response()->json([
            'data' => $kategori
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriProduct  $kategoriProduct
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriProduct $kategoriProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriProduct  $kategoriProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriProduct $kategoriProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriProduct  $kategoriProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriProduct $kategori)
    {
        $kategori->update($request->all());
        
        return response()->json([
            'message' => 'success',
            'data' => $kategori,
        ]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriProduct  $kategoriProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriProduct $kategori)
    {
        // dd($kategori);
        // KategoriProduct::destroy($kategori);

        $kategori->delete();

        return response()->json([
            'message' => 'success',
        ]);
    }
}

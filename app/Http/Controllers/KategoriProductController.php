<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduct;
use Illuminate\Http\Request;

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
        $kategori = KategoriProduct::create($request->all());

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

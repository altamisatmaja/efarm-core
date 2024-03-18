<?php

namespace App\Http\Controllers;

use App\Models\CategoryLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryLivestockController extends Controller
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
        $categoryLivestock = CategoryLivestock::all();

        return response()->json([
            'data' => $categoryLivestock,
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
            'nama_kategori_hewan' =>  'required',
            'deskripsi_kategori_hewan' =>  'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $categoryLivestock = CategoryLivestock::create($request->all());

        return response()->json([
            'message' => 'success',
            'data' => $categoryLivestock,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryLivestock $categoryLivestock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryLivestock $categoryLivestock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryLivestock $categorylivestock)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori_hewan' =>  'required',
            'deskripsi_kategori_hewan' =>  'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $categorylivestock->update($request->all());

        return response()->json([
            'message' => 'succes',
            'data' => $categorylivestock
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryLivestock $categorylivestock)
    {
        $categorylivestock->delete();

        return response()->json([
            'message' => 'success',
            'data' => $categorylivestock
        ]);
    }
}

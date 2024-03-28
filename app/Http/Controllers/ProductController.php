<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct(){
       // Ignored, really
       $this->middleware('auth')->only(['list']);
       $this->middleware('auth:api')->only(['delete']);
   }   
   
   public function list(){
       return view('admin.pages.product.index');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        return response()->json([
            'data' => $product,
        ]);
    }

    public function create()
    {
        return view('admin.pages.product.create');
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
            'id_livestock' => 'required', //done
            'harga_product' => 'required', 
            'id_kategori' => 'required', //done
            'nama_product' => 'required',
            'tags' => 'required',
            'diskon' => 'required',
            'id_partner' => 'required', //done
            'gambar_hewan' => 'required',
            'id_jenis_gender_hewan' => 'required', //done
            'lahir_hewan' => 'required',
            'berat_hewan_ternak' => 'required',
            'stok_hewan_ternak' => 'required',
            'terjual' => 'required',
            'deskripsi_product' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if($request->has('gambar_hewan')){
            $gambar = $request->file('gambar_hewan');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_hewan'] = $nama_gambar;
        }

        $product = Product::create($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $product
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json([
            'data' => $product
        ]);
    }


    public function edit(Product $product)
    {
        return view('admin.pages.product.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'id_livestock' => 'required',
            'harga_product' => 'required',
            'id_kategori' => 'required',
            'nama_product' => 'required',
            'tags' => 'required',
            'diskon' => 'required',
            'id_partner' => 'required',
            'id_jenis_gender_hewan' => 'required',
            'lahir_hewan' => 'required',
            'berat_hewan_ternak' => 'required',
            'stok_hewan_ternak' => 'required',
            'terjual' => 'required',
            'deskripsi_product' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if($request->hasFile('gambar_product')){
            File::delete('uploads/'.$product->gambar_product);
            $gambar = $request->file('gambar_product');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_product'] = $nama_gambar;
        } else {
            unset($input['gambar_product']);
        }

        $product->update($input);

        return response()->json([
            'success' => true,
            'message' => 'succes',
            'data' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        File::delete('uploads/'.$product->gambar_product);
        $product->delete();

        return response()->json([
            'message' => 'success',
            'data' => $product
        ]);
    }
}

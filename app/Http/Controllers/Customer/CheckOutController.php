<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Payment\TripayController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class CheckOutController extends Controller
{
    public function index($slug_product){
        $tripay = new TripayController();
        $channels = $tripay->getPaymentChannels();
        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();
        // dd($channels, 'abc');
        return view('pages.market.checkout', compact('channels', 'product'));
    }

    public function show($reference){
        $tripay = new TripayController();
        $detail = $tripay->detailTransaction($reference);
        // dd($detail);
        return view('pages.market.finally', compact('detail'));
    }

    public function store(Request $request){
        // dd($request->all());
        $product = Product::find($request->product_id);
        $method = $request->method;
        // dd($method);
        $kuantitas = $request->kuantitas;
        $harga_product = $product->harga_product;
        $nama_product = $product->nama_product;
        $gambar_hewan = $product->gambar_hewan;
        // dd($product->harga_product);

        $tripay = new TripayController();
        $reference =  $tripay->requestTransaction($product, $method, $kuantitas, $harga_product, $nama_product, $gambar_hewan);

        return redirect()->route('customer.checkout.show', ['reference' => $reference]);
    }
}

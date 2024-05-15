<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index($slug_product)
    {
        $tripay = new TripayController();
        $channels = $tripay->getPaymentChannels();
        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();
        // dd($channels, 'abc');
        return view('pages.market.checkout', compact('channels', 'product'));
    }

    public function show($reference)
    {
        $tripay = new TripayController();
        $detail = $tripay->detailTransaction($reference);
        // dd($detail);
        return view('pages.market.finally', compact('detail'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $product = Product::find($request->product_id);
        $method = $request->method;

        $kuantitas = $request->kuantitas;
        $harga_product = $product->harga_product;
        $nama_product = $product->nama_product;
        $gambar_hewan = $product->gambar_hewan;

        $harga_total = $harga_product * $kuantitas;

        $tripay = new TripayController();
        $reference = $tripay->requestTransaction($product, $method, $kuantitas, $harga_product, $nama_product, $gambar_hewan);
        // dd($reference->data->reference);

        // Membuat pesanan baru
        $order = Order::create([
            'id_user' => auth()->user()->id,
            'status' => 'Baru',
            'pengiriman' => 'Pengiriman Internal',
            'catatan' => 'Testing',
            'reference' => $reference->data->reference,
            'merchant_ref' => $reference->data->merchant_ref,
            'status_pembayaran' => $reference->data->status,
        ]);

        $id_order = $order->id;

        OrderDetail::create([
            'id_partner' => $product->id_partner,
            'id_product' => $product->id,
            'harga_total' => $harga_total,
            'kuantitas_total' => $kuantitas,
            'id_order' => $id_order,
            'diskon' => 0,
        ]);

        // dd($product->harga_product);

        return redirect()->route('customer.checkout.show', ['reference' => $reference->data->reference]);
    }
}

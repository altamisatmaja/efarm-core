<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function pre(Request $request){
        $kuantitas = $request->kuantitas;
        $random = $request->random;
        $slug_product = $request->slug_product;

        return redirect()->route('customer.checkout', [
            'slug_product' => $slug_product,
            'kuantitas' => $kuantitas,
            'random' => $random,
        ]);
    }

    public function index($slug_product, $kuantitas, $random)
    {
        try {
            if (Auth::check()) {
                $tripay = new TripayController();
                $channels = $tripay->getPaymentChannels();
                $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();
                $total_harga = $kuantitas * $product->harga_product;

                return view('pages.market.checkout', compact('channels', 'product', 'kuantitas', 'random', 'total_harga'));
            } else {
                return redirect()->route('customer.login');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function show($reference)
    {
        $tripay = new TripayController();
        $detail = $tripay->detailTransaction($reference);
        $instruksi = $detail->instructions;
        $orderitems = $detail->order_items;

        // dd(json_encode($orderitems));

        $order = Order::where('merchant_ref', $detail->merchant_ref)->first();
        $orderdetail = OrderDetail::where('id_order', $order->id)->first();
        $products = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->where('id', $orderdetail->id_product)->first();



        return view('pages.market.finally', compact('detail', 'instruksi', 'products', 'orderitems'));
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
        $slug_product = $request->slug_product;
        $catatan = $request->catatan;

        $harga_total = $harga_product * $kuantitas;

        $tripay = new TripayController();
        $reference = $tripay->requestTransaction($product, $method, $kuantitas, $harga_product, $nama_product, $gambar_hewan);
        $metode_pembayaran = $reference->data->payment_method;
        // dd($catatan);

        // Membuat pesanan baru
        $order = Order::create([
            'id_user' => auth()->user()->id,
            'status' => 'Baru',
            'pengiriman' => 'Pengiriman Internal',
            'catatan' => $catatan,
            'reference' => $reference->data->reference,
            'merchant_ref' => $reference->data->merchant_ref,
            'status_pembayaran' => $reference->data->status,
            'metode_pembayaran' => $metode_pembayaran,
        ]);

        $id_order = $order->id;

        OrderDetail::create([
            'id_partner' => $product->id_partner,
            'id_product' => $product->id,
            'harga_total' => $harga_total,
            'kuantitas_total' => $kuantitas,
            'id_order' => $id_order,
            'diskon' => 0,
            'metode_pembayaran' => $method
        ]);

        // dd($product->harga_product);

        return redirect()->route('customer.checkout.show', [
            $reference->data->reference
        ]);
    }
}

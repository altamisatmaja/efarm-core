<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        $orders = Order::with('user')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->where('id_partner', $partner->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        $product = Product::with('typelivestocks', 'gender_livestocks', 'categoryproduct', 'categorylivestocks', 'testimonial', 'reviews')->where('id_partner', $partner->id)->where('status', 'Aktif')->get();

        $productdata = $product->map(function ($product) {
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

        $total_keuntungan = 0;

        $total_hewan_ternak = 0;

        $idPartner = $partner->id;

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::where('id_order', $order->id)
                                        ->where('id_partner', $idPartner)
                                        ->get();
            foreach ($orderDetails as $orderDetail) {
                $total_keuntungan += $orderDetail->harga_total;
                $total_hewan_ternak += $orderDetail->kuantitas_total;
            }
        }

        $total_order = count($orders);

        $total_product = count($productdata);


        $orderss = Order::with('user')->get();
        $allorderss = [];

        foreach ($orderss as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->where('id_partner', $partner->id)->get();
            $allorderss[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        $limaorder = array_slice($allorders, 0, 5);

        $productbaru = $productdata->take(5);

        return view('partner.dashboard', compact('partner', 'user', 'allorders', 'total_keuntungan', 'total_hewan_ternak', 'total_order', 'total_product', 'limaorder', 'allorderss', 'productbaru'));
    }
}

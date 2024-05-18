<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class ReportAdminController extends Controller
{
    public function index()
    {
        $report = OrderDetail::with('product.categoryproduct', 'partner', 'order.user')->get();
        $reportdata = $report->map(function ($report) {
            return [
                'reference' => $report->order->reference,
                'status' => $report->order->status,
                'pengiriman' => $report->order->pengiriman,
                'catatan' => $report->order->catatan,
                'total_untung' => $report->harga_total,
                'kuantitas' => $report->kuantitas_total,
                'nama_pembeli' => $report->order->user->nama,
                'gambar_pembeli' => $report->order->user->profile_photo_path,
                'lokasi_pengiriman' => $report->order->user->kabupaten_user,
                'nama_produk' => $report->product->nama_product,
                'gambar_produk' => $report->product->gambar_hewan,
                'nama_kategori_produk' => $report->product->categoryproduct->first()->nama_kategori_product,
                'harga_produk' => $report->product->harga_product,
                'dipesan_pada' => $report->order->created_at,
                'metode_pembayaran' => $report->order->metode_pembayaran,
            ];
        });

        return view('admin.pages.report.index', compact('reportdata'));
    }

    public function show($id){
        $report = OrderDetail::with('product.categoryproduct', 'partner', 'order.user')->where('id' , $id)->get();
        $reportdata = $report->map(function ($report) {
            return [
                'reference' => $report->order->reference,
                'status' => $report->order->status,
                'pengiriman' => $report->order->pengiriman,
                'catatan' => $report->order->catatan,
                'total_untung' => $report->harga_total,
                'kuantitas' => $report->kuantitas_total,
                'nama_pembeli' => $report->order->user->nama,
                'gambar_pembeli' => $report->order->user->profile_photo_path,
                'lokasi_pengiriman' => $report->order->user->kabupaten_user,
                'nama_produk' => $report->product->nama_product,
                'gambar_produk' => $report->product->gambar_hewan,
                'nama_kategori_produk' => $report->product->categoryproduct->first()->nama_kategori_product,
                'harga_produk' => $report->product->harga_product,
                'dipesan_pada' => $report->order->created_at,
                'metode_pembayaran' => $report->order->metode_pembayaran,
            ];
        });

        return view('admin.pages.report.show', compact('reportdata'));
    }
}

<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportPartnerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        // dd($partner);
        $report = OrderDetail::with('product', 'partner', 'order.user')->where('id_partner', $partner->id)->get();
        $reportdata = $report->map(function ($report) {
            return [
                'reference' => $report->order->reference,
                'status' => $report->order->status,
                'pengiriman' => $report->order->pengiriman,
                'total_untung' => $report->harga_total,
                'kuantitas' => $report->kuantitas_total,
                'nama_pembeli' => $report->order->user->nama,
                'lokasi_pengiriman' => $report->order->user->kabupaten_partner,
            ];
        });

        dd($reportdata);

        return view('partner.pages.report.index', compact('partner'));
    }

    public function show($id)
    {
        return view('partner.pages.report.detail', compact('partner'));
    }
}

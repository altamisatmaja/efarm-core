<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderPartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->partner = Auth::user();
            return $next($request);
        });
    }

    /**
     * View semua order
     */
    public function order()
    {
        $partner = Auth::user();
        return view('partner.pages.order.index', compact('partner'));
    }

    /**
     * View order baru
     */
    public function order_new_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Baru')
            ->with('orders_detail.product')
            ->get();

        return view('partner.pages.order.new', compact('partner', 'orders'));
    }

    /**
     * View order confirmerd
     */
    public function order_confirmed_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Dikonfirmasi')
            ->with('orders_detail.product')
            ->get();
        return view('partner.pages.order.confirmed', compact('partner', 'orders'));
    }

    /**
     * View order packed
     */
    public function order_packed_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Dikemas')
            ->with('orders_detail.product')
            ->get();
        return view('partner.pages.order.packed', compact('partner', 'orders'));
    }

    /**
     * View order sent
     */
    public function order_sent_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Dikirim')
            ->with('orders_detail.product')
            ->get();
        return view('partner.pages.order.sent', compact('partner', 'orders'));
    }

    /**
     * View order accepted
     */
    public function order_accepted_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Diterima')
            ->with('orders_detail.product')
            ->get();
        return view('partner.pages.order.accepted', compact('partner', 'orders'));
    }

    /**
     * View order end
     */
    public function order_end_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Selesai')
            ->with('orders_detail.product')
            ->get();
        return view('partner.pages.order.end', compact('partner', 'orders'));
    }

    /**
     * Handling status new order to confirm
     */
    public function status_new_to_confirm(Request $request, $id)
    {
        $order = Order::find($id);

        if($order){
            $order->status = 'Dikonfirmasi';
            $order->save();

            return redirect()->route('partner.order.confirmed')->with('success', 'Pesanan berhasil dikonfirmasi');
        }  else {
            return redirect()->route('partner.order.new')->with('error', 'Pesanan gagal dikonfirmasi');
        }
    }

    /**
     * Handling status new confirm to packed
     */
    public function status_confirm_to_packed(Request $request, $id)
    {
        $order = Order::find($id);

        if($order){
            $order->status = 'Dikemas';
            $order->save();

            return redirect()->route('partner.order.packed')->with('success', 'Pesanan berhasil dikemas');
        }  else {
            return redirect()->route('partner.order.confirmed')->with('error', 'Pesanan gagal dikonfirmasi');
        }
    }

    /**
     * Handling status new packed to sent
     */
    public function status_packed_to_sent(Request $request, $id)
    {
        $order = Order::find($id);

        if($order){
            $order->status = 'Dikirim';
            $order->save();

            return redirect()->route('partner.order.packed')->with('success', 'Pesanan berhasil dikemas');
        }  else {
            return redirect()->route('partner.order.confirmed')->with('error', 'Pesanan gagal dikonfirmasi');
        }
    }


    /**
     * Handling status order
     */
    public function order_new($id_order) {}
}

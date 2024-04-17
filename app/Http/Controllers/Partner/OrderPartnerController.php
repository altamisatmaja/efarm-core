<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->partner = Auth::user();
            return $next($request);
        });
    }

    /**
     * View semua order
     */
    public function list(){
        return view('partner.pages.order.index', compact('partner'));
    }

    /**
     * View order baru
     */
    public function order_new_view()
    {
        $order = Order::with('user')->where('status', 'Baru')->get();
        return view('partner.pages.order.new', compact('partner', 'order'));
    }

    /**
     * View order confirmerd
     */
    public function order_confirmed_view()
    {
        $order = Order::with('user')->where('status', 'Dikonfirmasi')->get();
        return view('partner.pages.order.confirmed', compact('partner', 'order'));
    }

    /**
     * View order packed
     */
    public function order_packed_view()
    {
        $order = Order::with('user')->where('status', 'Dikemas')->get();
        return view('partner.pages.order.packed', compact('partner'));
    }

    /**
     * View order sent
     */
    public function order_sent_view()
    {
        $order = Order::with('user')->where('status', 'Dikirim')->get();
        return view('partner.pages.order.sent', compact('partner'));
    }

    /**
     * View order accepted
     */
    public function order_accepted_view()
    {
        $order = Order::with('user')->where('status', 'Diterima')->get();
        return view('partner.pages.order.accepted', compact('partner'));
    }

    /**
     * View order end
     */
    public function order_end_view()
    {
        $order = Order::with('user')->where('status', 'Selesai')->get();
        return view('partner.pages.order.end', compact('partner'));
    }

    /**
     * Handling status order
     */
    public function handle_status(Request $request, Order $order){
        $order->update([
            'status' => $request->status
        ]);
    }

    /**
     * Handling status order
     */
    public function order_new($id_order){
    }

}

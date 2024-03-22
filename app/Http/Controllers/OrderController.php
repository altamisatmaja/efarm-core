<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();

        return response()->json([
            'data' => $order
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
            'id_user' => 'required',
            // 'id_product' => 'required',
            // 'invoice' => 'required',
            // 'sub_total' => 'required',
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        $order = Order::create($input);

        // OrderDetail::create($input);

        for ($i = 0; $i < count($input['id_product']); $i++) {
            OrderDetail::create([
                'id_order' => $input['id'][$i],
                'id_product' => $input['id_product'][$i],
                'jumlah' => $input['jumlah'],
                'total' => $input['total'],
            ]);
        }

        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        $order->update($input);

        OrderDetail::where('id_order', $order['id'])->delete();

        for ($i = 0; $i < count($input['id_product']); $i++) {
            OrderDetail::create([
                'id_order' => $input['id'][$i],
                'id_product' => $input['id_product'][$i],
                'jumlah' => $input['jumlah'],
                'total' => $input['total'],
            ]);
        }

        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return response()->json(['
        message' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function order_confirmed()
    {
        $order = Order::where('status', 'Dikonfirmasi')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function order_packed()
    {
        $order = Order::where('status', 'Dikemas')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function order_sent()
    {
        $order = Order::where('status', 'Dikirim')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function order_accepted()
    {
        $order = Order::where('status', 'Diterima')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function order_end()
    {
        $order = Order::where('status', 'Selesai')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    public function handle_status(Request $request, Order $order) {
        $order->update([
            'status' => $request->status
        ]);

        return response()->json(['message' => 'success', 'data' => $order]);
    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartCustomerController extends Controller
{
    public function index(){
        $user = auth()->user();
        $cart = Cart::with('user', 'product')->with('product.typelivestocks')->with('product.gender_livestocks')->with('product.partner')->with('product.categoryproduct')->with('product.reviews')->with('product.testimonial')->where('id_user', $user->id)->get();
        // dd(json_encode($cart));
        return view('customer.pages.cart.index');
    }

    public function show($slug_product){
        $user = auth()->user();
        return view('customer.pages.cart.show');
    }

    public function store(Request $request, $slug_product){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'id_product' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json(
                    $validator->errors(), 422
                );
            }

            $input = $request->all();
            $input['id_product'] = $user->id;
            $cart = Cart::create($input);

            if ($cart) {
                return redirect()->route('customer.cart')->with('success', 'Data keranjang berhasil ditambahkan');
            } else {
                return redirect()->back()->with('errors', 'Data gagal produk berhasil dilisting');
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($id){
        try {
            $cart = Cart::findOrFail($id);

            if ($cart) {
                $cart->delete();

                return redirect()->route('customer.cart')->with('success', 'Data keranjang berhasil ditambahkan');
            } else {
                return redirect()->back()->with('errors', 'Data gagal produk berhasil dilisting');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

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

    public function destroy(){

    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartCustomerController extends Controller
{
    public function index(){
        return view('customer.pages.cart.index');
    }

    public function show($slug_product){
        return view('customer.pages.cart.show');
    }

    public function destroy(){

    }
}

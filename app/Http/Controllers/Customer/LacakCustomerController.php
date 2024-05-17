<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LacakCustomerController extends Controller
{
    public function index(){
        return view('customer.pages.lacak.index');
    }
  
    public function lacak_new(){
        return view('customer.pages.cart.new');
    }

    public function lacak_confimed(){
        return view('customer.pages.cart.confirmed');
    }

    public function lacak_packed(){
        return view('customer.pages.cart.packed');
    }

    public function lacak_sent(){
        return view('customer.pages.cart.sent');
    }

    public function lacak_end(){
        return view('customer.pages.cart.end');
    }

}

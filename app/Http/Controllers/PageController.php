<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('homepage');
    }
    public function buy(){
        return view('pages.market.buy');
    }

    public function product(){
        return view('pages.market.product');
    }

    public function farm(){
        return view('pages.market.farm');
    }

    public function market(){
        return view('pages.market.index');
    }

    public function about(){
        return view('pages.about.index');
    }
    public function partner(){
        return view('pages.partner.index');
    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Payment\TripayController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class CheckOutController extends Controller
{
    public function index($slug_product){
        $tripay = new TripayController();
        $channels = $tripay->getPaymentChannels();
        // dd($channels, 'abc');
        return view('pages.market.checkout', compact('channels'));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AIController extends Controller
{
    public function index(){
        $products = Product::with('partner')->get();

        return response()->json([
            'status' => true,
            'message' => 'success',
            'data' => $products,
        ]);
    }

    public function nearest_view(){
        return view('pages.market.nearest');
    }
}

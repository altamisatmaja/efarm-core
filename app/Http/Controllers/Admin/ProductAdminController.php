<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function index(){
        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct')->get();
        return view('admin.pages.product.index', compact('product'));
    }

    public function show($slug_product){
        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct')->where('slug_product', $slug_product)->first();
        return view('admin.pages.product.show', compact('product'));
    }
}

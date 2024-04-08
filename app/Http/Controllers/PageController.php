<?php

namespace App\Http\Controllers;

use App\Models\CategoryLivestock;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function buy()
    {
        return view('pages.market.buy');
    }

    public function livestock($slug_kategori_product, $slug_category_livestock)
    {
        // $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        // $categorylivestock = CategoryLivestock::where('slug_category_livestock', $categoryproduct->id)->get();
        // dd($categorylivestock);
        return view('pages.market.product', compact('categorylivestock'));
    }

    public function product($slug_kategori_product, $slug_category_livestock, $slug_product)
    {
        $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        $categorylivestock = CategoryLivestock::where('slug', $slug_category_livestock)->first();

        $product = Product::where('slug_product', $slug_product)
            ->where('id_kategori', $categoryproduct->id) 
            ->first();

        // dd($categoryproduct);
        // dd($product);
        return view('pages.market.product', compact('categoryproduct', 'categorylivestock', 'product'));
    }

    public function farm($slug_kategori_product)
    {
        $category = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        // $products = Product::where('')
        $products = Product::where('id_kategori', $category->id)->get();
        // dd($products);
        return view('pages.market.farm', compact('products'));
    }

    public function market()
    {
        $categoryproduct = CategoryProduct::all();
        // dd($categoryproduct);
        // $categorylivestock = CategoryLivestock::where('id_kategori_product', $categoryproduct->id_kategori_product)->first();
        // dd($categorylivestock);
        return view('pages.market.index', compact('categoryproduct'));
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function partner()
    {
        return view('pages.partner.index');
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\CategoryProduct;
use App\Models\GenderLivestock;
use App\Models\Livestock;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageWebController extends Controller
{
    public function index()
    {
        $baseurlapi =  env('BASE_URL_AI');
        // Masih statis
        // $endpoint = '/product/6/4/';
        // $response = Http::get($baseurlapi . $endpoint);
        // $response = json_decode($response);

        return view('homepage');
    }

    public function buy()
    {
        return view('pages.market.buy');
    }

    public function livestock($slug_kategori_product, $slug_category_livestock)
    {
        $id_kategori_product = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->value('id');

        $livestock = CategoryLivestock::where('slug', $slug_category_livestock)->first();

        $products = Product::where('id_kategori', $livestock->id)->get();

        return view('pages.market.livestock', compact('products', 'slug_kategori_product', 'slug_category_livestock'));
    }

    public function category($slug_kategori_product)
    {
        $id_kategori_product = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->value('id');

        // $livestock = CategoryLivestock::where('slug', $slug_category_livestock)->first();

        // $products = Product::where('id_kategori', $livestock->id)->get();

        return view('pages.market.livestock');
    }

    public function product($slug_kategori_product, $slug_category_livestock, $slug_product)
    {
        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();

        $id_products = Product::where('slug_product', $slug_product)->first()->id;
        $reviews = Review::where('id_product', $id_products)->get();
        $total_rating = 0;
        foreach ($reviews as $review) {
            $total_rating += $review->rating;
        }

        $total_reviews = count($reviews);

        if($total_reviews != 0){
            $hasil_reviews = number_format($total_rating / $total_reviews, 2);
        } else {
            $hasil_reviews = 0;
        }
        $banyak_reviewers = count($reviews);

        $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        $categorylivestock = CategoryLivestock::where('slug', $slug_category_livestock)->first();

        return view('pages.market.product', compact('product', 'reviews', 'hasil_reviews', 'banyak_reviewers', 'categoryproduct', 'categorylivestock'));
    }

    public function farm($slug_kategori_product)
    {
        $category = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        // dd($category);
        // $products = Product::where('id_kategori', $category->id)->get();
        // dd($products);
        return view('pages.market.farm', compact('products'));
    }

    public function by_categorytypelivestocks($slug){
        $categorytypelivestocks = CategoryLivestock::where('slug', $slug)->first();
        dd($categorytypelivestocks);
        return view('pages.market.farm', compact('categorytypelivestocks'));
    }

    public function market()
    {
        $categoryproduct = CategoryProduct::all();
        $categorylivestock = CategoryLivestock::all();
        $livestock = Livestock::all();
        $product = Product::orderBy('created_at', 'desc')->limit(8)->with('categorylivestocks','categoryproduct','gender_livestocks', 'typelivestocks', 'partner', 'testimonial', 'reviews')->get();
        // $reviews = Review::all();
        
        return view('pages.market.index', compact('categoryproduct', 'categorylivestock', 'livestock', 'product'));
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function partner()
    {
        return view('pages.partner.index');
    }

    public function layanan(){
        return view('pages.layanan.index');
    }
}

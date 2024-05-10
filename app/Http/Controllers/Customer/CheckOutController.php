<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class CheckOutController extends Controller
{
    public function index($slug_product){
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

        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();
        
        return view('admin.pages.product.show', compact('product', 'reviews', 'hasil_reviews', 'banyak_reviewers'));
    }
}

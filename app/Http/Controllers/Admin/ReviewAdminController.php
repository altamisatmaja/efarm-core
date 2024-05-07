<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewAdminController extends Controller
{
    public function list(){
        $review = Review::with('products', 'user')->get();

        return view('admin.pages.review.list', compact('review'));
    }
}

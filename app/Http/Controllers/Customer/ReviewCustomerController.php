<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewCustomerController extends Controller
{
    public function index($id) {
        try {
            $product = Product::where('id', $id)->first();
            return view('customer.pages.review.show', compact('product'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'id_product' => 'required',
                'id_user' => 'required',
                'review' => 'required',
                'rating' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $review = Review::create($input);

            if($review){
                return redirect()->back()->with('success', 'Data review berhasil ditambahkan');
            }  else {
                return redirect()->back()->with('errors', 'Data review gagal ditambahkan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

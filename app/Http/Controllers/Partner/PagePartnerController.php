<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagePartnerController extends Controller
{
    public function index(){
        return view('partner.dashboard');
    }

    public function farm_index($partner){
        $partner = Auth::user();
        return view('partner.pages.farm.index', compact('partner'));
    }

    public function farm_create($partner){
        $partner = Auth::user();

        return view('partner.pages.farm.create', compact('partner'));
    }

    public function farm_edit($partner, $slug_farm){
        $partner = Auth::user();

        return view('partner.pages.farm.edit', compact('partner'));
    }

    public function product_index($partner){
        $partner = Auth::user();

        return view('partner.pages.product.index', compact('partner'));
    }

    public function product_create(){
        $partner = Auth::user();

        return view('partner.pages.product.create', compact('partner'));
    }

    public function product_edit($partner, $slug_product){
        $partner = Auth::user();

        return view('partner.pages.product.edit', compact('partner'));
    }

    public function testimonial_index(){
        $partner = Auth::user();

        return view('partner.pages.testimonial.index', compact('partner'));
    }

    public function testimonial_detail($id, $partner){
        $partner = Auth::user();

        return view('partner.pages.testimonial.detail', compact('partner'));
    }

    public function testimonial_reply($id, $partner){
        $partner = Auth::user();

        return view('partner.pages.testimonial.reply', compact('partner'));
    }

    public function report($partner){
        $partner = Auth::user();

        return view('partner.pages.report.index', compact('partner'));
    }

    public function report_detail($id, $partner){
        $partner = Auth::user();

        return view('partner.pages.report.detail', compact('partner'));
    }

    public function order($partner){
        $partner = Auth::user();

        return view('partner.pages.order.index', compact('partner'));
    }

    public function order_new_view($partner){
        $partner = Auth::user();

        return view('partner.pages.order.new', compact('partner'));
    }

    public function order_confirmed_view($partner){
        $partner = Auth::user();

        return view('partner.pages.order.confirmed', compact('partner'));
    }
    public function order_packed_view($partner){
        $partner = Auth::user();

        return view('partner.pages.order.packed', compact('partner'));
    }
    public function order_sent_view($partner){
        $partner = Auth::user();

        return view('partner.pages.order.sent', compact('partner'));
    }
    public function order_accepted_view($partner){
        $partner = Auth::user();

        return view('partner.pages.order.accepted', compact('partner'));
    }
    public function order_end_view(){
        $partner = Auth::user();

        return view('partner.pages.order.end', compact('partner'));
    }
    public function order_end_show_view(){
        $partner = Auth::user();

        return view('partner.pages.order.end_show', compact('partner'));
    }
}

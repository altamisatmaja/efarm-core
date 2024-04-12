<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagePartnerController extends Controller
{
    public function index(){
        return view('partner.dashboard');
    }

    public function farm_index(){
        return view('partner.pages.farm.index');
    }

    public function farm_create($partner){
        return view('partner.pages.farm.create');
    }

    public function farm_edit($partner, $slug_farm){
        return view('partner.pages.farm.edit');
    }

    public function product_index($partner){
        return view('partner.pages.product.index');
    }

    public function product_create(){
        return view('partner.pages.product.create');
    }

    public function product_edit($partner, $slug_product){
        return view('partner.pages.product.edit');
    }

    public function testimonial_index(){
        return view('partner.pages.testimonial.index');
    }

    public function testimonial_detail($id){
        return view('partner.pages.testimonial.detail');
    }

    public function testimonial_reply($id){
        return view('partner.pages.testimonial.reply');
    }

    public function report(){
        return view('partner.pages.report.index');
    }

    public function report_detail($id){
        return view('partner.pages.report.detail');
    }

    public function order(){
        return view('partner.pages.order.index');
    }

    public function order_new_view(){
        return view('partner.pages.order.new');
    }

    public function order_confirmed_view(){
        return view('partner.pages.order.confirmed');
    }
    public function order_packed_view(){
        return view('partner.pages.order.packed');
    }
    public function order_sent_view(){
        return view('partner.pages.order.sent');
    }
    public function order_accepted_view(){
        return view('partner.pages.order.accepted');
    }
    public function order_end_view(){
        return view('partner.pages.order.end');
    }
    public function order_end_show_view(){
        return view('partner.pages.order.end_show');
    }
}

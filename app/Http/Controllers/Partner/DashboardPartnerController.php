<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('partner.dashboard');
    }
}

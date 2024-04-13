<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $partner = Auth::user();
        return view('partner.dashboard', compact('partner'));
    }
}

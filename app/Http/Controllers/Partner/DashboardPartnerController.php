<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        return view('partner.dashboard', compact('partner'));
    }
}

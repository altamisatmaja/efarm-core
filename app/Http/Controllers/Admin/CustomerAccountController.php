<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerAccountController extends Controller
{
    public function index(){
        $users = User::where('id_user_role', 2)->paginate(10);

        // dd($user);
        return view('admin.pages.customer.index', compact('users'));
    }
}

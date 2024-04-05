<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AuthCustomerController extends Controller
{
    public function index(){
        return view('customer.auth.login');
    }

    public function register_view(){
        return view('customer.auth.register');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if($user->id_user_role == 2){
                $token = Auth::guard('api')->attempt($credentials);
                cookie()->queue(cookie('token', $token, 120));
                return response()->json([
                    'success' => true,
                    'message' => 'Login berhasil',
                    'token' => $token,
                ]);
            }   
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah'
        ]);
    }
    

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'konfirmasi_password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = User::create($input);

        return response()->json([
            'data' => $user
        ]);
    }

    public function logout()
    {
        Session::flush();
        return redirect('customer/login');
    }
}

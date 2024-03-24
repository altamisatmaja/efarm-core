<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }
    
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if($user->id_user_role == 1){
                $token = Auth::guard('api')->attempt($credentials);
                // cookie()->queue(cookie('token', $token, 120));
                // return redirect('/admin/dashboard');
                return response()->json([
                    'success' => true,
                    'message' => 'Login berhasil',
                    'token' => $token,
                ]);
            }
            // else {
            //     return back()->withErrors(['error' => 'Anda bukan admin!']);
            // }
        }
    
        // return back()->withErrors(['error' => 'Email atau password salah']);
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
            'expires_in' => auth()->factory()->getTTL() * 120,
        ]);
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            // 'email_verified_at' => 'required',
            'password' => 'required',
            // 'konfirmasi_password' => 'required|password',
            // 'nama_partner' => 'required',
            // 'nama_perusahaan_partner' => 'required',
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
        return redirect('admin/login');
        // auth()->logout();

        // return response()->json(['message' => 'Successfully logged out']);
    }

}

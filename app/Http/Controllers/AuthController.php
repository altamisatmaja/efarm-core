<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }
    public function login()
    {
        $credentials = request(['username', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['message' => 'Username atau password salah'], 401);
        }

        return $this->respondWithToken($token);
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
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

}

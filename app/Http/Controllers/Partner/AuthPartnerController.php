<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthPartnerController extends Controller
{
    public function index()
    {
        return view('partner.auth.login');
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
            // $partner = Partner::with('users')->where('status', 'Sudah diverifikasi')->first();
            $partner = $user->partner()->where('status', 'Sudah diverifikasi')->first();
            if ($user->id_user_role == 3 && $partner) {
                $token = Auth::guard('api')->attempt($credentials);
                cookie()->queue(cookie('token', $token, 120));
                return redirect('/partner/dashboard');
            } else if (!$partner) {
                return back()->withErrors(['errors' => 'Anda belum diverifikasi!']);
            } else {
                return back()->withErrors(['error' => 'Anda bukan partner!']);
            }
        }

        return back()->withErrors(['error' => 'Email atau password salah']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'konfirmasi_password' => 'required',
        ]);

        if ($validator->fails()) {
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
        return redirect('partner/login');
    }
}

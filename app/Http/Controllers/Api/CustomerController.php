<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //      $this->middleware('auth:api', ['except' => ['login']]);
    //  }
 
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if($user->id_user_role == 2){
                $token = Auth::guard('api')->attempt($credentials);
                return $this->respondWithToken($token);
            }
        }
    
        return response()->json([
            'data' => 'succes'
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
            'email' => 'required',
            'password' => 'required|password|same:konfirmasi_password',
            'konfirmasi_password' => 'required|password|same:password',
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
        // Session::flush();
        // return redirect('admin/login');
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}

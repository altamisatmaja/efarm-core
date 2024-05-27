<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Services\EmailVerificationService;
use App\Http\Requests\Auth\LoginRequest;

class AuthCustomerController extends Controller
{
    private $service;
    public function __construct(EmailVerificationService $service){
        $this->service = $service;
    }
    public function index(){
        return view('customer.auth.login');
    }

    public function register_view(){
        return view('customer.auth.register');
    }

     /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function login(LoginRequest $request)
     {
         session()->put('previous_url', url()->previous());

         $request->authenticate();
         $request->session()->regenerate();

         $redirectTo = '';

         if(Auth::check()) {
             switch (Auth::user()->user_role) {
                 case 'Pelanggan':
                     $redirectTo = 'customer.dashboard';
                     break;
             }
         } else {
             $loginRoute = '';
             switch ($request->input('user_role')) {
                 case 'Pelanggan':
                     $loginRoute = 'customer.login';
                     break;
             }
             return redirect()->route($loginRoute)->with('status', 'Invalid credentials.');
         }

         return redirect(session()->pull('previous_url', route($redirectTo)));
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

        if($user){
            $this->service->sendVerificationLink($user);
            return response()->json([
                'data' => $user
            ]);
        }

    }

    public function logout()
    {
        Session::flush();
        return redirect('customer/login');
    }

    /**
    * Handle account registration request
    *
    * @param Request $request
    *
    * @return \Illuminate\Http\Response
    */
    public function register_email(Request $request)
    {
    $user = User::create($request->validated());

    event(new Registered($user));

    auth()->login($user);

    return redirect('/')->with('success', "Account successfully registered.");
    }

}

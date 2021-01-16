<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:system_admin')->except('logout','profile','updateProfile','updatePassword');
    }

    private $errors=[];

    protected $redirectTo = '/dashboard';

    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)){
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $auth=$this->guard()->attempt($this->credentials($request));
        if ($auth){
           $user=$this->guard()->getLastAttempted();
           $status=false;
           if ($user->status==1){
               $status=true;
           }else{
               $this->incrementLoginAttempts($request);
               $this->errors['status']="You Are Not Active Yet......Please Try Again";
           }
           if ($status){
               return $this->sendLoginResponse($request);
           }else{
               $this->logout($request);
           }
           return redirect('/')
               ->withInput($request->only('email'))
               ->withErrors($this->errors);
        }
        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Override
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('system_admin');
    }

    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/');
    }
}

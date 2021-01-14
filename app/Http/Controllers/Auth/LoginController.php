<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    private $errors=[];
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout','profile','updateProfile','updatePassword');
    }
    // override
    protected function redirectTo(){
        return '/user/dashboard';
    }
    // override
    public function showLoginForm(){
        return view('user/auth/login');
        //return view('admin.auth.login') /*Same As*/;
    }

    
    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $auth=Auth::guard()->attempt($this->credentials($request));
        //dd($auth);
        if ($auth){
            $user = Auth::guard()->getLastAttempted()/*get recent loged in user data*/;
            $status=false;
            //$role =false;
            /*Activation Check*/
            if ($user->status==1){
                $status=true;
            }else{
                $this->incrementLoginAttempts($request);
                $this->errors['status']= "You Are Not Active...Try Again yet!";
            }
            if ($status /* && $title more true check*/){
                return $this->sendLoginResponse($request);
            }else{
                $this->logout($request);
            }
            return redirect('/')
                ->withInput($request->only('email'))
                ->withErrors($this->errors);
        }
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/');
    }
}

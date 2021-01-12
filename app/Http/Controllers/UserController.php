<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.add_user');
    }

    public function allUser(){
        return view('admin.user.allUser');
    }
    
    //this method is only for user from userController
    public function dashboard(){
        return view('user.dashboard.user_dashboard');
    }

    public function allUserList(){
        return view('user.userinfo.allUser');
    }
}

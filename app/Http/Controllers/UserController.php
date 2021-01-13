<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.add_user');
    }

    public function allUser(){
        return view('admin.user.allUser');
    }

    public function infoDetails(){
        return view('admin.user.userDetail');
    }
    
    //this method is only for user from userController
    public function dashboard(){
        return view('user.dashboard.user_dashboard');
    }

    public function userList(){
        return view('user.userinfo.allUser');
    }

    public function profile(){
        return view('user.profile.profile');
    }

    //search user
    public function searchUser(Request $request){
        $searchValue=$request->input('search');
        $users=[];

        if($searchValue){
            $users=Admin::where('status',1)
            ->where('name','like','%'.$searchValue.'%')
            ->orWhere('id','like','%'.$searchValue.'%')
            ->paginate(3);
            $users->appends(['search'=>$searchValue]);
        }
        return view('user.users.search_user')->with('user',$users);
    }

   //user details==when click in table details button
   public function userDetailsInformation(){
       return view('user.userinfo.userDetails');
   }
}

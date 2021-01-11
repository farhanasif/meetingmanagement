<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:system_admin');
    }

    public function index(){
        return view('admin.dashboard.dashboard');
    }
}

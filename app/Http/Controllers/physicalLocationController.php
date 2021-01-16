<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class physicalLocationController extends Controller
{
    public function index(){
        return view('admin.physical_location.phyLocation');
    }

    public function allPhyLocation(){
        return view('admin.physical_location.view_phyLocation');
    }
}

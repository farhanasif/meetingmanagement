<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class UserPhysicalLocationController extends Controller
{
   public function index(){
       return view('user.physical_lication.phyLocation');
   }

   public function searchPhyLocation(Request $request){
    $searchValue=$request->input('search');
    $phyLocation=[];

    if($searchValue){
        $phyLocation=Admin::where('status',1)
        ->where('name','like','%'.$searchValue.'%')
        ->orWhere('id','like','%'.$searchValue.'%')
        ->paginate(3);
        $phyLocation->appends(['search'=>$searchValue]);
    }
    return view('user.physical_lication.searchPhyLocation')->with('phyLocations',$phyLocation);
   }

    //phy location
    public function locationDetail(){
        return view('user.physical_lication.locationDetails');

    }
}

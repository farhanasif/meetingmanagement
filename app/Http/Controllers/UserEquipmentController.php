<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class UserEquipmentController extends Controller
{
    public function allEquipments(){
        return view('user.equipment.allEquipment');
    }

    public function searchEquipment(Request $request){
        $searchValue=$request->input('search');
        $meetings=[];

        if($searchValue){
            $meetings=Admin::where('status',1)
            ->where('name','like','%'.$searchValue.'%')
            ->orWhere('id','like','%'.$searchValue.'%')
            ->paginate(3);
            $meetings->appends(['search'=>$searchValue]);
        }
        return view('user.equipment.search_equipment')->with('meeting',$meetings);
    }

    public function printEquipment(){
        return view('user.equipment.printEquipment');
    }
}

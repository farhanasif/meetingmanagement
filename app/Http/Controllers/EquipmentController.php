<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(){
        return view('admin.equipment.add_equipment');
    }

    public function allEquipment(){
        return view('admin.equipment.allEquipment');
    }
}

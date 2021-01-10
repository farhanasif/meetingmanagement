<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function myMeeting(){
        return view('admin.meetings.my_meeting');
    }
}

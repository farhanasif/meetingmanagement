<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotorMeetingController extends Controller
{
    public function promotorMeeting(){
        return view('promotor.meetings.my_meeting');
    }

    public function pMeetingDetails(){
        return view('promotor.meetings.detailsMeeting');
    }

    public function promotorViewMeeting(){
        return view('promotor.meetings.viewMeeting');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMeetingController extends Controller
{
    public function userMeeting(){
        return view('user.meeting.myMeeting');
    }

    public function meetingDetails(){
        return view('user.meeting.meetingDetails');
    }

    public function addMeeting(){
        return view('user.meeting.add_meeting');
    }
}

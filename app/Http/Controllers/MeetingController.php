<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function myMeeting(){
        return view('admin.meetings.my_meeting');
    }

    public function schudules(){
        return view('admin.meetings.meeting_schudule');
    }

    public function createMeeting(){
        return view('admin.meetings.create');
    }

    public function viewMeetingType(){
        return view('admin.meetings.viewMeetingType');
    }
}

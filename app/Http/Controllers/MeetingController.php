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

    public function showForm(){
        return view('admin.meetings.create');
    }

    public function viewMeetingType(){
        return view('admin.meetings.viewMeetingType');
    }

    public function meetingDetails(){
        return view('admin.meetings.detailsMeeting');
    }

    public function viewPreviousMeetings(){
        return view('admin.meetings.viewPreviousMeetingAdmin');
    }

    public function detailsPreviousMeeting(){
        return view('admin.meetings.detailsPreviousMeeting');
    }

    public function AdminViewMeeting(){
        return view('admin.meetings.viewMeeting');
    }

    public function myMeetingDetails(){
        return view('admin.meetings.myMeetingDetails');
    }

    public function adminViewPendingMeeting(){
        return view('admin.meetings.viewPendingMeeting');
    }
}

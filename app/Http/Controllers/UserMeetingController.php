<?php

namespace App\Http\Controllers;

use App\Admin;
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

    public function viewMeeting(){
        return view('user.meeting.viewMeeting');
    }

    public function viewPreviousMeeting(){
        return view('user.meeting.previousMeeting');
    }

    public function searchPreviousMeeting(Request $request){
        $searchValue=$request->input('search');
        $meetings=[];

        if($searchValue){
            $meetings=Admin::where('status',1)
            ->where('name','like','%'.$searchValue.'%')
            ->orWhere('designation','like','%'.$searchValue.'%')
            //->where('admin','like','%'.$searchValue.'%')
            ->paginate(3);
            $meetings->appends(['search'=>$searchValue]);
        }
        return view('user.meeting.search_previousMeeting')->with('meeting',$meetings);
    }

    public function viewPendingMeeting(){
        return view('user.meeting.pendingMeeting');
    }

    public function searchPendingMeeting(Request $request){
        $searchValue=$request->input('search');
        $meetings=[];

        if($searchValue){
            $meetings=Admin::where('status',1)
            ->where('name','like','%'.$searchValue.'%')
            ->orWhere('id','like','%'.$searchValue.'%')
            ->paginate(3);
            $meetings->appends(['search'=>$searchValue]);
        }
        return view('user.meeting.search_pendingMeeting')->with('meeting',$meetings);
    }

    //view all meeting details
    public function viewMeetingDetails(){
        return view('user.meeting.viewAllMeetingDetails');
    }
    
    //view Previous meeting details
    public function viewPreviousMeetingDetails(){
        return view('user.meeting.viewPreviousMeetingDetails');
    }

    //print meeting
    public function printMeeting(){
        return view('user.meeting.searchMeetingPrint');
    }

    //print pending meeting
    public function printPendingMeeting(){
        return view('user.meeting.pendingMeetingPrint');
    }
}

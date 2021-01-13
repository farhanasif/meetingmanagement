<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/login','Auth\AdminLoginController@index')->name('login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login');
Route::post('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/dashboard','HomeController@index')->name('dashboard');
//Route::get('/create/meeting','MeetingController@storeMeeting')->name('storeMeeting');
Route::get('/meeting/add','MeetingController@showForm')->name('show.form');
Route::get('/view/meeting','MeetingController@viewMeetingType')->name('meeting.type');
Route::get('/my/meetings','MeetingController@myMeeting')->name('meeting.datatable');
Route::get('/meeting/details','MeetingController@meetingDetails')->name('meeting.details');
Route::get('/meeting/schudule','MeetingController@schudules')->name('meeting.schudule');

//user add
Route::get('/create/user','UserController@index')->name('user');
//Route::post('/store/users','UserController@store')->name('store.users');
Route::get('/user/list','UserController@allUser')->name('user.datatable');
Route::get('userDetails/information','UserController@infoDetails')->name('details.info');

//Equipment
//Route::get('/create/eqiupment','EquipmentController@index')->name('eqiupment');
Route::get('addEquipment','EquipmentController@equipmentIndex')->name('equipmentForm');
Route::get('/adminEqiupment/list','EquipmentController@allEquipment')->name('eqiupment.datatable');

//physical location
Route::get('/create/physical/location','physicalLocationController@index')->name('physical.location');
Route::get('/physical/list','physicalLocationController@allPhyLocation')->name('physical.datatable');




//user login
Route::get('/user/login','Auth\LoginController@showLoginForm');
Route::post('/user/login','Auth\LoginController@login')->name('user.login');
Route::post('/user/logout','Auth\LoginController@logout')->name('user.logout');


//Users
Route::get('/user/dashboard','UserController@dashboard')->name('user.dashboard');
Route::get('/search/user','UserController@searchUser')->name('searchUser');
Route::get('/all/users','UserController@userList');
//user details
//Route::get('/user/detail','UserController@usersDetails')->name('usersDetails');
Route::get('/user/detail','UserController@userDetailsInformation')->name('userinfoDetails');
//Route::get('/all/user/list','UserController@allUserList')->name('allUser.datatable');


//User Meeting
Route::get('/userMeeting','UserMeetingController@userMeeting')->name('userMeeting');
Route::get('/user/meeting/details','UserMeetingController@meetingDetails')->name('userMeetingDetails');
//create meeting
Route::get('/create/meeting','UserMeetingController@addMeeting')->name('addMeeting');
Route::get('/view/meetings','UserMeetingController@viewMeeting')->name('viewMeeting');
Route::get('/view/previous/meeting','UserMeetingController@viewPreviousMeeting')->name('viewPreviousMeeting');
Route::get('/view/previousMeetingDetails','UserMeetingController@viewPreviousMeetingDetails')->name('viewPreviousMeetingdetailsInfo');
Route::get('/search/previous/meeting','UserMeetingController@searchPreviousMeeting')->name('searchPreviousMeeting');
Route::get('/view/pending/meeting','UserMeetingController@viewPendingMeeting')->name('viewPendingMeeting');
Route::get('/view/allmeetingDetails','UserMeetingController@viewMeetingDetails')->name('viewMeetingdetailsInfo');
//user profile(UserController)
Route::any('/user/profile','UserController@profile')->name('user.profile');
Route::get('/search/pending/meeting','UserMeetingController@searchPendingMeeting')->name('searchPendingMeeting');

//Uer equipment
Route::get('/eqiupment/list','UserEquipmentController@allEquipments')->name('eqiupments.datatable');
Route::get('/search/equipment','UserEquipmentController@searchEquipment')->name('searchEquipment');

//physical location
Route::get('/view/physical/location','UserPhysicalLocationController@index')->name('physicalLocation');
Route::get('/search/physical/location','UserPhysicalLocationController@searchPhyLocation')->name('searchPhylocation');
Route::get('/physical/locationDetails','UserPhysicalLocationController@locationDetail')->name('physicalLoc');
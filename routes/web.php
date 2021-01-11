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
Route::get('/create/meeting','MeetingController@createMeeting')->name('create.meeting');
Route::get('/view/meeting','MeetingController@viewMeetingType')->name('meeting.type');
Route::get('/my/meetings','MeetingController@myMeeting')->name('meeting.datatable');
Route::get('/meeting/schudule','MeetingController@schudules')->name('meeting.schudule');

//user add
Route::get('/create/user','UserController@index')->name('user');
//Route::post('/store/users','UserController@store')->name('store.users');
Route::get('/user/list','UserController@allUser')->name('user.datatable');

//Equipment
Route::get('/create/eqiupment','EquipmentController@index')->name('eqiupment');
Route::get('/eqiupment/list','EquipmentController@allEquipment')->name('eqiupment.datatable');

//physical location
Route::get('/create/physical/location','physicalLocationController@index')->name('physical.location');
Route::get('/eqiupment/list','physicalLocationController@allPhyLocation')->name('eqiupment.datatable');

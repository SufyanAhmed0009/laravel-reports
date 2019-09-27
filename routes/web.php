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

Route::get('/', function () {
    return view('welcome');
});

//Show the total number of active and blocked User
Route::get('active', 'ActiveController@showActiveCount');

//Show list of Active users
Route::get('/activelist', 'ActiveController@showActiveUser');

//Show list of Blocked users
Route::get('/blocklist', 'ActiveController@showBlockUser');

//Show list of Active User with the help of date
Route::post('/submit/active', 'ActiveController@showActiveByDate');

//Show list of Blocked User with the help of date
Route::post('/submit/block', 'ActiveController@showBlockByDate');


//Route::get ('a',function (){
//    return view('login_data');
//});
//Route::get('/dashboard', function () {
//    return view('login_data');
//});

//Route::get('blocked', 'ActiveController@showBlockCount');
//Route::get('/detail', function ()
//{
//    return view('login_detail','$' );
//});
//Route:: view ('/detail','block');


//Route::get('/blocklist1/{date1}/{date2}', 'ActiveController@showBlockUser');


//Route::get('blocklist/{id}', function($id){
//
//    $status_Id = Input::get('date1');
//    print_r($status_Id);
//    exit();
//
//    return Redirect::back();
//});





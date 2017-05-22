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

    $data=[
        'ip'=>$_SERVER['REMOTE_ADDR'],
        'browser' => $_SERVER['HTTP_USER_AGENT']
    ];
    return view('form', $data);
});

Route::get('addComments',"MainController@addComments");

Route :: get('show','MainController@showAll');

Route :: get('kaskad', 'MainController@showKaskad');

Route:: get('formAnswer', 'MainController@answer');

Route:: get('addAnswer', 'MainController@AddAnswer');
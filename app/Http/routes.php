<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/password/changePassword', 'SettingsController@showChangePasswordForm');

Route::post('/password/changePassword', 'SettingsController@updatePassword');

Route::resource('users', 'UserController');

Route::resource('roles', 'RolesController');

Route::get('/password/securityquestions', 'Auth\PasswordController@getPasswordSecurityQuestions');

Route::post('/password/securityquestions', 'Auth\PasswordController@getPasswordSecurityQuestions');

Route::post('/resetPassword', 'Auth\PasswordController@resetPassword');

Route::post('/passwordchanged', 'Auth\PasswordController@resetPasswordSuccess');

Route::get('/home', 'HomeController@index');

Route::resource('emergencies', 'EmergencyController');

Route::resource('patients', 'PatientController');

Route::get('importExport', 'ReportDemoController@importExport');

Route::get('downloadExcel/{type}', 'ReportDemoController@downloadExcel');

Route::post('importExcel', 'ReportDemoController@importExcel');

Route::get('/generateBarChart', 'ReportDemoController@generateBar');

Route::post('/generateBarChart', 'ReportDemoController@generateBar');

Route::get('/generateBarViz', 'ReportDemoController@generate');

Route::post('/generateBarViz', 'ReportDemoController@generate');

Route::get('/generateBedBarViz', 'ReportDemoController@generateBedBar');

Route::post('/generateBedBarViz', 'ReportDemoController@generateBedBar');
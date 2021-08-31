<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [

    'uses'=> '\App\Http\Controllers\BdrsController@index',
    'as' =>'/'
] );
Route::get('registration', [

    'uses'=> '\App\Http\Controllers\RegController@newreg',
    'as' =>'birth-reg'
] );



Route::get('registration/district/{id}', [
    'uses'=> '\App\Http\Controllers\RegController@district',
    'as' =>'district-check'
] );

Route::get('registration/upazila/{id}', [
    'uses'=> '\App\Http\Controllers\RegController@upazila',
    'as' =>'upazila-check'
] );




Route::post('registration/confirm', [

    'uses'=> '\App\Http\Controllers\RegController@confirm',
    'as' =>'confirm'
] );
Route::post('registration/success', [

    'uses'=> '\App\Http\Controllers\RegController@success',
    'as' =>'success'
] );

Route::get('application-status', [

    'uses'=> '\App\Http\Controllers\BdrsController@aplStatus',
    'as' =>'apl-status'
] );

Route::post('application-status/check', [

    'uses'=> '\App\Http\Controllers\infoController@checkStatus',
    'as' =>'check-status'
] );





Route::get('birth-info', [

    'uses'=> '\App\Http\Controllers\BdrsController@bInfo',
    'as' =>'birth-info'
] );

Route::post('birth-info/check', [

    'uses'=> '\App\Http\Controllers\infoController@bInfo',
    'as' =>'info-check'
] );
Route::get('about', [

    'uses'=> '\App\Http\Controllers\BdrsController@about',
    'as' =>'about'
] );
Route::get('contact', [

    'uses'=> '\App\Http\Controllers\BdrsController@contact',
    'as' =>'contact'
] );



Auth::routes(['register' => false]);


Route::get('/dashboard', [

    'uses'=> '\App\Http\Controllers\HomeController@index',
    'as' =>'dashboard'
] );

Route::get('/new-applicants', [

    'uses'=> '\App\Http\Controllers\HomeController@applicants',
    'as' =>'applicants'
] );

Route::get('/view-applicant/{id}', [

    'uses'=> '\App\Http\Controllers\HomeController@viewApplicant',
    'as' =>'view-applicant'
] );

Route::get('/approve-applicant/{id}', [

    'uses'=> '\App\Http\Controllers\HomeController@approveApplicant',
    'as' =>'approve-applicant'
] );

Route::get('/decline-applicants/{id}', [

    'uses'=> '\App\Http\Controllers\HomeController@declineApplicant',
    'as' =>'decline-applicant'
] );

Route::get('/citizens', [

    'uses'=> '\App\Http\Controllers\HomeController@citizens',
    'as' =>'citizens'
] );



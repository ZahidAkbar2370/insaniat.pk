<?php

use App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');

// Fundraisers
    Route::get('fundraisers', "FundraiserController@index")->name('fundraiser.index');
    Route::get('fundraisers/create', "FundraiserController@create")->name('fundraiser.create');
    Route::post('fundraisers/create-fundraisers',"FundraiserController@store");
    Route::get('fundraisers/delete/{id}',"FundraiserController@destroy");
    Route::get('fundraisers/edit/{id}',"FundraiserController@edit");
    Route::post('fundraisers/update-fundraisers/{id}',"FundraiserController@update");

    Route::get('fundraisers/share/{id}',"FundraiserController@share");


// Blood Donation
    Route::get('blooddonation', "BloodDonationController@index")->name('blooddonation.index');
    Route::get('blooddonation/create', "BloodDonationController@create")->name('blooddonation.create');
    Route::post('blooddonation/create-blooddonation',"BloodDonationController@store");
    Route::get('blooddonation/delete/{id}',"BloodDonationController@destroy");
    Route::get('blooddonation/edit/{id}',"BloodDonationController@edit");
    Route::post('blooddonation/update-blooddonation/{id}',"BloodDonationController@update");

    Route::get('blooddonation/share/{id}',"BloodDonationController@share");
});

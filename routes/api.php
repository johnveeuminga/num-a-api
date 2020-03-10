<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sample', function () {
    return 'hello';
} );

Route::get('/crop', 'CropController@getCrop');

Route::post('/crop', 'CropController@getCrop');

Route::put('/crop', 'CropController@getCrop');

Route::delete('/crop', 'CropController@getCrop');

Route::get('/listing', 'ListingCOntroller@getListing');

Route::post('/listing', 'ListingCOntroller@getListing');

Route::put('/listing', 'ListingCOntroller@getListing');

Route::delete('/listing', 'ListingCOntroller@getListing');

Route::get('/listing_photos', function (Request $request){
    return;
});

Route::post('/listing_photos', function (Request $request){
    return;
});

Route::put('/listing_photos', function (Request $request){
    return;
});

Route::delete('/listing_photos', function (Request $request){
    return;
});

Route::get('/user', function (Request $request){
    return;
});

Route::post('/user', function (Request $request){
    return;
});

Route::put('/user', function (Request $request){
    return;
});

Route::delete('/user', function (Request $request){
    return;
});

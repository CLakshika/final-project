<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/hotels','HotelController');
Route::apiResource('/rooms','RoomController');
Route::apiResource('/reservations','ReservationController');
Route::apiResource('/orders','OrderController');
Route::apiResource('/contacts','ContactController');
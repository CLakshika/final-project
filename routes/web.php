<?php
use Gmopx\LaravelOWM\LaravelOWM;

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
})->name('welcome');

Route::get('/hoteldetails', function (){
    $city = 'anuradhapura';
    $lowm = new LaravelOWM();
    $current_weather = $lowm->getCurrentWeather($city);
    $weather = $current_weather->temperature->now->getValue();
    return view('hoteldetails')
        ->withCity($city)
        ->withWeather($weather);
})->name('hoteldetails');

Route::get('/security',function (){
    return view('security');
})->name('security');

Route::get('/restobar',function (){
    return view('restobar');
})->name('restobar');


Route::get('/balcony',function (){
    return view('balcony');
})->name('balcony');

Route::get('/wifi',function (){
    return view('wifi');
})->name('wifi');

Route::get('/test', function (){
    return view('test');
})->name('test');

Route::get('/inventry', function (){
    return view('inventry');
})->name('inventry');

Route::get('/inventrydetails', function (){
    return view('inventrydetails');
})->name('inventrydetails');

Route::get('/gallery', function (){
    return view('gallery');
})->name('gallery');

Route::get('/gallery2', function (){
    return view('gallery2');
})->name('gallery2');

Route::get('/room', function (){
    return view('room');
})->name('room');


Route::get('/contact', function (){
    $city = 'anuradhapura';
    $lowm = new LaravelOWM();
    $current_weather = $lowm->getCurrentWeather($city);
    $weather = $current_weather->temperature->now->getValue();
    return view('contact')
        ->withCity($city)
        ->withWeather($weather);
})->name('contact');


Route::get('/about', function (){
    return view('about');
})->name('about');


Route::get('/facilities', function (){
    return view('facilities');
})->name('facilities');

Route::get('/pooldetails', function (){
    return view('pooldetails');
})->name('pooldetails');

Route::get('/spadetails', function (){
    return view('spadetails');
})->name('spadetails');


Route::get('/gymdetails', function (){
    return view('gymdetails');
})->name('gymdetails');

Route::get('/laundetails', function (){
    return view('laundetails');
})->name('laundetails');

Route::get('/tennisdetails', function (){
    return view('tennisdetails');
})->name('tennisdetails');

Route::get('/dining', function (){
    return view('dining');
})->name('dining');

Route::get('/rooms', function (){
    return view('rooms');
})->name('rooms');

Route::get('/reserve', function (){
    return view('reserve');
})->name('reserve');

Route::get('/login', function (){
    return view('login');
})->name('login');

Route::get('/register', function (){
    return view('register');
})->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/weather', 'ReservationController@index');
Route::get('/hotel', 'Web\HotelController@index')->name('hotel.index');
Route::get('/hotel/{id}', 'Web\HotelController@show')->name('hotel.show');
Route::get("index","message@index");
Route::get("store","message@store");
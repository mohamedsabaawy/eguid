<?php

use Illuminate\Support\Facades\Route;

define('STORAGE', 'public/');
define('PAGINATE', 1);

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
    $cities = \App\Models\City::all();
    $room = \App\Models\HotelRoom::where('client_id',null);
    return view('front.welcome',compact([
        'cities',

    ]));
})->name('front.welcome');
Route::group(['namespace' => 'Front'], function () {

    Route::post('search','HotelController@search')->name('hotel.search');
    //hotel frontend routes for client
    Route::group(['prefix' => 'hotels'],function (){
        Route::get('/', 'HotelController@index')->name('front.hotel.index');  ////show all hotels for client
        Route::get('/{hotel}', 'HotelController@show')->name('front.hotel.show')->middleware('hotel');  ///show one hotel for client
    });
    //restaurant frontend routes for client
    Route::group(['prefix' => 'restaurants'],function (){
        Route::get('/', 'RestaurantController@index')->name('front.restaurant.index');  ////show all restaurants for client
        Route::get('/{restaurant}', 'RestaurantController@show')->name('front.restaurant.show')->middleware('restaurant');  ///show one restaurant for client
    });

    Route::group([],function (){
        Route::get('map','WelcomeController@map')->name('front.map');
        Route::get('otherSites','WelcomeController@otherSites')->name('front.otherSites');
        Route::get('museums','WelcomeController@museums')->name('front.museums');
    });

    //client routes
    Route::group([],function(){
        Route::get('client/register' , 'ClientController@registerForm')->name('client.form.register')->middleware('guest:client');
        Route::post('client/register' , 'ClientController@register')->name('client.register');
        Route::get('client/login' , 'ClientController@loginForm')->name('client.form.login')->middleware('guest:client');
        Route::post('client/login' , 'ClientController@login')->name('client.login');
        Route::post('client/logout' , 'ClientController@logout')->name('client.logout');
        Route::post('client/room' , 'ClientController@room')->name('room1')->middleware('auth:client');
        Route::post('client/review' , 'ClientController@review')->name('client.review')->middleware('auth:client');
    });

});

//----------------------admin routes----------------//

Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('home');
Route::group(['namespace' => 'BackEnd', 'middleware' => 'auth', 'prefix' => '/admin'], function () {
    Route::resource('/country', 'CountryController');
    Route::resource('/city', 'CityController');
    Route::resource('/hotel', 'HotelController');
    Route::resource('/restaurant', 'RestaurantController');
    Route::resource('/landmark', 'LandmarkController');
    Route::post('landmark/upload','LandmarkController@upload')->name('landmark.upload');  //route for upload photo
    Route::post('landmark/delete/{landmarkPhoto}','LandmarkController@delete')->name('landmark.delete');  //route for delete photo
    Route::get('review' , 'HotelController@reviewForm')->name('admin.review.form');
    Route::post('review' , 'HotelController@review')->name('admin.review');
});

Route::group(['prefix' => '/home', 'namespace' => 'Hotel'], function () {
    Route::get('/login', 'HotelController@loginForm')->name('hotel.login.form')->middleware('guest:hotel');
    Route::post('/login', 'HotelController@login')->name('hotel.login')->middleware('guest:hotel');


    //----------------------hotel admin routes----------------//


    Route::group(['middleware' => 'auth:hotel'], function () {
        Route::get('/', 'HotelController@index')->name('hotel');
        Route::get('/profile', 'HotelController@profile')->name('hotel.profile');
        Route::post('/profile', 'HotelController@update')->name('hotel.profile.update');
        Route::post('/logout', 'HotelController@logout')->name('hotel.logout');
        Route::resource('photo', 'PhotoController');
        Route::resource('room', 'RoomController');
        Route::resource('type', 'TypeController');
        Route::resource('menu', 'MenuController');
        Route::get('reserve','ReservationController@index')->name('hotel.reserve');
        Route::get('reserve/accept/{id}','ReservationController@accept')->name('hotel.reserve.accept');
        Route::get('reserve/reject/{id}','ReservationController@reject')->name('hotel.reserve.reject');
        Route::post('reserve/end/{id}','ReservationController@end')->name('hotel.reserve.end');
    });


});



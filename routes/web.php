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

Route::get('/home', function () {
    return Redirect::to('portal/requests');
});

Route::get('/', function () {
    return Redirect::to('portal/requests');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('addtopatch/{requestId}/{hajjId}', 'RequestController@registerToPatch');
//, 'middleware' => ['auth']
Route::group(['prefix' => 'portal'], function() {
            # Admin Dashboard
            Route::get('dashboard', 'DashboardController@index');
            Route::get('/', 'DashboardController@index');
            Route::get('surveys', 'DashboardController@surveys');

            Route::get('success', function () {
			    return view('layouts.portal.requests.success');
			});



            Route::get('dashboard', 'RequestController@dashboard');
            Route::get('requests/show/{requestId}', 'RequestController@requestShow');
            Route::get('addcordinator/{requestId}', 'RequestController@addcordinator');
            Route::post('requests/create', 'RequestController@postCreate');
            Route::get('requests/create', 'RequestController@getCreate');
            Route::get('requests', 'RequestController@index');



            # Profile 
            Route::get('profile', 'ProfileController@index');
            Route::post('update', 'ProfileController@update');
           //Route::post('changepicture', 'ProfileController@picture');
            Route::post('change_password', 'ProfileController@update_password');

});

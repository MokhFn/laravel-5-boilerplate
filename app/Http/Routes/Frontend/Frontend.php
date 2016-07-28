<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
//Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');



        route::get('Events' , 'EventsController@getAll');

        route::post('createEvent' , 'EventsController@store');

        Route::get('Event/{eventID}', ['uses' =>'EventsController@find_by_id']); // Needs to be implemented in events table
        
        route::get('Management/Users' ,function (){
            return view('frontend.users');
            });

        route::get('Management/Roles' ,function (){
            return view('frontend.roles');
        });

        route::get('Equipment' ,function (){
            return view('frontend.items');
        });

        route::get('Bills' ,function (){
            return view('frontend.bills');
        });

        route::get('Ordres' ,function (){
            return view('frontend.ordre');
        });


    });
});
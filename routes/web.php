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

//    Route::get('/', function () {
//        return view('index');
//    });

    use ShawnSandy\Bluelines\App\Blueline;

    Route::get('/', function(){

        $articles = Blueline::latestPaginated(20)->where('status', "PUBLISHED");

        $featured = Blueline::latest(3)->where('status', "PUBLISHED")->where("featured", 1)->get();

        return view('index', compact("articles", "featured"));

    });

    Route::resource("/articles", "GospelController");

    Route::group(['prefix' => 'admin'], function () {
        Dash::routes();
    });

    Route::group(["prefix" => "bluelines"], function () {
        Blue::routes();
    });

    Route::group(["prefix" => "extras"], function () {
        Extras::routes();
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');


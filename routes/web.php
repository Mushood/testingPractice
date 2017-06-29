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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/primeFactor/{number}', 'PrimeFactorController@index');

Route::get('/roman/{number}', 'RomanController@index');

Route::get( '/bowling/{frame1}/{frame2}/{frame3}/{frame4}/{frame5}/{frame6}/{frame7}/{frame8}/{frame9}/{frame10}/{frame11}/{frame12}',
            'BowlingController@play');

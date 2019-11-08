<?php

use App\School;
use App\Department;
use App\Year;

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

Route::get('/', 'HomeController@index')->name('');

Auth::routes();



Auth::routes(['register' => false]);

Route::get('/test', function(){

	$hashed = Hash::make('LFM4JDFB', [
	    'memory' => 1024,
	    'time' => 2,
	    'threads' => 2,
	]);

echo $hashed;


});

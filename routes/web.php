<?php

use Illuminate\Support\Facades\Route;
use Practicals\Song;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
	return view('Welcome');
});

Route::get('/veggies', function () {
    return view('veggies');
});

Route::get('/veggies/{veggiesName}', function (string $veggiesName) {
	return $veggiesName;
})->whereIn('veggiesName', ['baigan','bhindi', 'aaloo', 'gobhi']);

Route::get('/songs', function () {
	$song1 = new Song();
	$song1 -> setTitle("With you");
	$song1 ->setArtist("A P Dhillon");

	$song2 = new Song();
	$song2 -> setTitle("My life");
	$song2 ->setArtist("G P Nagpur");

	$song3 = new Song();
	$song3 -> setTitle("Libbas");
	$song3 ->setArtist("KAKA");

    return view('songs', [ 'songs'=> [ $song1 ,$song2 , $song3 ]]);
});

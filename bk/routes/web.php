<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
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


Route::get('/', function () { return view('home'); });
Route::get('/why-use-us', function () { return view('home'); });
Route::get('/how-its-done', function () { return view('how-its-done'); });
Route::get('/be-informed', function () { return view('be-informed'); });
Route::get('/faq', function () { return view('faq'); });
Route::get('/privacy', function () { return view('privacy'); });
Route::get('/terms', function () { return view('terms'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/responsible-lending', function () { return view('responsible-lending'); });
Route::get('/site-map', function () { return view('site-map'); });

Route::controller(CityController::class)->group(function () {
   Route::get('/payday-loans-california', 'california');
   Route::get('/payday-loans-kentucky', 'kentucky');
   Route::get('/payday-loans-michigan', 'michigan');
   Route::get('/payday-loans-ohio', 'ohio');
   Route::get('/payday-loans-texas', 'texas');

   // India
   Route::get('/payday-loans-mumbai', 'mumbai');
   Route::get('/payday-loans-delhi', 'delhi');

   // Philippines
   Route::get('/payday-loans-manila', 'manila');
   Route::get('/payday-loans-cebu', 'cebu');
   Route::get('/payday-loans-cavite', 'cavite');

});

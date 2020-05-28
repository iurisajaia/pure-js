<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'RoutesController@HomePage');
Route::get('/about', 'RoutesController@About');
Route::get('/terms-of-services', 'RoutesController@Terms');
Route::get('/privacy-policy', 'RoutesController@Privacy');
Route::get('/contact', 'RoutesController@Contact');

Route::get('/border-radius', 'RoutesController@BorderRadius');
Route::get('/linear-gradient', 'RoutesController@LinearGradient');
Route::get('/radial-gradient', 'RoutesController@RadialGradient');
Route::get('/box-shadow', 'RoutesController@BoxShadow');
Route::get('/html-formatter', 'RoutesController@HtmlFormater');
Route::get('/minify-css', 'RoutesController@MinifyCss');
Route::get('/minify-js', 'RoutesController@MinifyJs');
Route::get('/image-to-base64', 'RoutesController@ImageToBase64');
Route::get('/json-formatter', 'RoutesController@JsonFormatter');
Route::get('/base64-decode', 'RoutesController@BaseDecodeEncode');
Route::get('/json-encode', 'RoutesController@JsonEncodeDecode');

Route::get('/component' , function(){
   return view('components');
});


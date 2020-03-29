<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/image-to-base64' , function(Request $request){

    $image = $request->file('select_file');
    $img = file_get_contents($image);
    $base = base64_encode($img);

    return response()->json($base);
});

Route::post('/html-formater', function(Request $request){
    $text = $request->text;

    $dom = new DOMDocument();

    $dom->preserveWhiteSpace = false;
    $dom->loadHTML($text,LIBXML_HTML_NOIMPLIED);
    $dom->formatOutput = true;


//    print $dom->saveXML($dom->documentElement);

    return response()->json($dom->saveXML($dom->documentElement));
});

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

    return response()->json($dom->saveXML($dom->documentElement));
});

Route::post('/minify-js' , function(Request $request){
    $url = 'https://javascript-minifier.com/raw';
    $js = $request->text;

    // init the request, set various options, and send it
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
        CURLOPT_POSTFIELDS => http_build_query([ "input" => $js ])
    ]);

    $minified = curl_exec($ch);

    // finally, close the request
    curl_close($ch);

   return response()->json($minified);
});

Route::post('/base-encode', function(Request $request){

    $text = $request->text;

    $decoded = base64_encode($text);

    return response()->json($decoded);
});

Route::post('/base-decode', function(Request $request){

    $text = $request->text;

    $decoded = base64_decode($text);

    return response()->json($decoded);
});

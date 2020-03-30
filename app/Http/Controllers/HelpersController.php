<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpersController extends Controller
{
    public function ImageToBase(Request $request){

        $image = $request->file('select_file');
        $img = file_get_contents($image);
        $base = base64_encode($img);

        return response()->json($base);
    }

    public function HtmlFormatter(Request $request){

        $text = $request->text;

        $dom = new DOMDocument();

        $dom->preserveWhiteSpace = false;
        $dom->loadHTML($text,LIBXML_HTML_NOIMPLIED);
        $dom->formatOutput = true;

        return response()->json($dom->saveXML($dom->documentElement));
    }

    public function MinifyJs(Request $request){
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
    }

    public function BaseEncode(Request $request){

        $text = $request->text;

        $decoded = base64_encode($text);

        return response()->json($decoded);
    }

    public function BaseDecode(Request $request){

        $text = $request->text;

        $decoded = base64_decode($text);

        return response()->json($decoded);
    }

    public function JsonEncode(Request $request){

        $text = $request->text;

        $decoded = json_encode($text);

        return response()->json($decoded);
    }

    public function JsonDecode(Request $request){

        $text = $request->text;

        $decoded = json_decode($text);

        return response()->json($decoded);
    }
}

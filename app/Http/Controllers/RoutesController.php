<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller{


    // Static Pages

    public function HomePage(){
        return view('welcome');
    }

    public function About(){
        return view('static.about');
    }

    public function Terms(){
        return view('static.terms');
    }

    public function Privacy(){
        return view('static.privacy');
    }

    public function Contact(){
        return view('static.contact');
    }


    // Tools

    public function BorderRadius(){
        return view('tools.radius' );
    }

    public function LinearGradient(){
        return view('tools.linear-gradient');

    }

    public function RadialGradient(){
        return view('tools.radial-gradient');
    }

    public function BoxShadow(){
        return view('tools.shadow');

    }

    public function HtmlFormater(){
        return view('tools.html-formater');

    }

    public function MinifyCss(){
        return view('tools.minify-css');

    }

    public function MinifyJs(){
        return view('tools.minify-js');
    }

    public function ImageToBase64(){

        return view('tools.image-to-base64');
    }

    public function JsonFormatter(){
        return view('tools.json-formatter');
    }

    public function BaseDecodeEncode(){
        return view('tools.base64-decode');
    }

    public function JsonEncodeDecode(){
        return view('tools.json-encode');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller{

    public function HomePage(){

        $this->seo = [
            'title' => 'css tools generator',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('welcome')->with($data);
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


    public function BorderRadius(){
        $this->seo = [
            'title' => 'border radius generator',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.radius')->with($data);
    }

    public function LinearGradient(){
        $this->seo = [
            'title' => 'linear gradient generator',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.gradient')->with($data);
    }

    public function BoxShadow(){
        $this->seo = [
            'title' => 'box shadow generator',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.shadow')->with($data);
    }

    public function HtmlFormater(){
        $this->seo = [
            'title' => 'html formatter',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.html-formater')->with($data);
    }

    public function MinifyCss(){

        $this->seo = [
            'title' => 'minify css',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.minify-css')->with($data);
    }

    public function MinifyJs(){
        $this->seo = [
            'title' => 'minify js',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.minify-js')->with($data);
    }

    public function ImageToBase64(){
        $this->seo = [
            'title' => 'image to base64',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.image-to-base64')->with($data);
    }

    public function JsonFormatter(){
        $this->seo = [
            'title' => 'json formatter',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.json-formatter')->with($data);
    }

    public function BaseDecodeEncode(){
        $this->seo = [
            'title' => 'base 64 encode / decode',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];
        return view('tools.base64-decode')->with($data);
    }

    public function JsonEncodeDecode(){

        $this->seo = [
            'title' => 'json encode / decode',
            'description' => 'css tools generator description'
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.json-encode')->with($data);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller{

//    top keywoards
//json formatter,
//json prettier,
//json prettifier,
//html formatter
//base 64 encode
//base 64 decode

    public function HomePage(){

        $this->seo = [
            'title' => 'css tools generator',
            'description' => 'css tools generator description',
            'keywoards' => '
                css tool,
                box shadow generator,
                border radius generator ,
                linear gradient generator,
                html formatter ,
                html prettier,
                minify css,
                minify js,
                json encode,
                json decode,
                json formatter,
                image to base64,
                base64 to image,
                base64 encode,
                base64 decode
                '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('welcome')->with($data);
    }

    public function About(){
        $this->seo = [
            'title' => 'css tools generator',
            'description' => 'css tools generator description',
            'keywoards' => '
                css tool,
                box shadow generator,
                border radius generator ,
                linear gradient generator,
                html formatter ,
                html prettier,
                minify css,
                minify js,
                json encode,
                json decode,
                json formatter,
                image to base64,
                base64 to image,
                base64 encode,
                base64 decode
                '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('static.about')->with($data);
    }

    public function Terms(){
        $this->seo = [
            'title' => 'css tools generator',
            'description' => 'css tools generator description',
            'keywoards' => '
                css tool,
                box shadow generator,
                border radius generator ,
                linear gradient generator,
                html formatter ,
                html prettier,
                minify css,
                minify js,
                json encode,
                json decode,
                json formatter,
                image to base64,
                base64 to image,
                base64 encode,
                base64 decode
                '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('static.terms')->with($data);
    }

    public function Privacy(){
        $this->seo = [
            'title' => 'css tools generator',
            'description' => 'css tools generator description',
            'keywoards' => '
                css tool,
                box shadow generator,
                border radius generator ,
                linear gradient generator,
                html formatter ,
                html prettier,
                minify css,
                minify js,
                json encode,
                json decode,
                json formatter,
                image to base64,
                base64 to image,
                base64 encode,
                base64 decode
                '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('static.privacy')->with($data);
    }

    public function Contact(){
        $this->seo = [
            'title' => 'css tools generator',
            'description' => 'css tools generator description',
            'keywoards' => '
                css tool,
                box shadow generator,
                border radius generator ,
                linear gradient generator,
                html formatter ,
                html prettier,
                minify css,
                minify js,
                json encode,
                json decode,
                json formatter,
                image to base64,
                base64 to image,
                base64 encode,
                base64 decode
                '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('static.contact')->with($data);
    }


    public function BorderRadius(){
        $this->seo = [
            'title' => 'border radius',
            'description' => "Generate border radius CSS easily with this online styler. Enter the desired curve for each corner and get the code instantly.",
            'keywoards' => '
                border radius,
                border radius generator,
                rounded border css,
                css rounded corners,
                border radius top,
                border radius top left,
                radius css ,
                table border radius,
                rounded border,
                css corner radius,
                css circle border,
                html rounded corners
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.radius')->with($data);
    }

    public function LinearGradient(){
        $this->seo = [
            'title' => 'css gradient generator',
            'description' => 'CSS gradients let you display smooth transitions between two or more specified colors. CSS defines two types of gradients:Linear Gradients (goes down/up/left/right/diagonally) , Radial Gradients (defined by their center)',
            'keywoards' => '
                css gradient,
                css gradient generator,
                gradient generator,
                css linear gradient,
                css background gradient,
                linear gradient,
                background gradient color,
                gradient color css,
                css border gradient,
                css bg gradient,
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.linear-gradient')->with($data);
    }
    public function RadialGradient(){
        $this->seo = [
            'title' => 'css gradient generator',
            'description' => 'CSS gradients let you display smooth transitions between two or more specified colors. CSS defines two types of gradients:Linear Gradients (goes down/up/left/right/diagonally) , Radial Gradients (defined by their center)',
            'keywoards' => '
                css gradient,
                css gradient generator,
                gradient generator,
                css linear gradient,
                css background gradient,
                linear gradient,
                background gradient color,
                gradient color css,
                css border gradient,
                css bg gradient,
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.radial-gradient')->with($data);
    }

    public function BoxShadow(){
        $this->seo = [
            'title' => 'box shadow generator',
            'description' => 'The box-shadow CSS property adds shadow effects around an element\'s frame. You can set multiple effects separated by commas. A box shadow is described by X and Y offsets relative to the element, blur and spread radius, and color.',
            'keywoards' => '
                css box shadow,
                box shadow,
                text shadows,
                css text shadow,
                css shadow,
                css drop shadow,
                border shadow css,
                css box shadow generator,
                css shadow generator
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.shadow')->with($data);
    }

    public function HtmlFormater(){
        $this->seo = [
            'title' => 'html formatter',
            'description' => "HTML FORMATTER - Formats a HTML string/file with your desired indentation level. The formatting rules are not configurable but are already optimized for the best possible output.",
            'keywoards' => '
                html formatter,
                html beautifier,
                online html formatter,
                html prettifier,
                freeformatter,
                html beautifier online,
                html code beautifier
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.html-formater')->with($data);
    }

    public function MinifyCss(){

        $this->seo = [
            'title' => 'minify css',
            'description' => 'Free web-based tool to minify or beautify your CSS code.',
            'keywoards' => '
                minify css,
                css beautify,
                unminify css,
                compress css,
                minify css online,
                css formatter online,
                minimize css,
                css prettify,

            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.minify-css')->with($data);
    }

    public function MinifyJs(){
        $this->seo = [
            'title' => 'minify js',
            'description' => 'Free web-based tool to minify or beautify your JS code.',
            'keywoards' => '
                minify js,
                javascript minify,
                unminify js,
                uglifyjs,
                compress js,
                minify js online,
                babel minify,
                minimize js,
                javascript compressor
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.minify-js')->with($data);
    }

    public function ImageToBase64(){
        $this->seo = [
            'title' => 'image to base64',
            'description' => 'Optimize your images and convert them to base64 online. Drag & Drop your files, copy to clipboard with a click and use the result in HTML and CSS.',
            'keywoards' => '
                image to base64,
                base64 encode image,
                base64 decode image,
                base64 to image,
                convert image to base64,
                png to base64,
                svg to base64,
                convert base64 to image,
                encoded images,
                base64 to image online,
                image to base64 online
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.image-to-base64')->with($data);
    }

    public function JsonFormatter(){
        $this->seo = [
            'title' => 'json formatter',
            'description' => 'The JSON Formatter & Validator beautifies and debugs JSON data with advanced formatting and validation algorithms.',
            'keywoards' => '
                json formatter,
                json prettier,
                json prettifier,
                online json formatter,
                json parser,
                json beautifier,
                online json viewer,
                online json formatter,
                json parser online,
                json formatter chrome
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.json-formatter')->with($data);
    }

    public function BaseDecodeEncode(){
        $this->seo = [
            'title' => 'base64 decode',
            'description' => 'Decode from Base64 or Encode to Base64 with advanced formatting options. Enter our site for an easy-to-use online tool.',
            'keywoards' => '
                base64 encode,
                base64 decode,
                html decode,
                base64 decode online,
                hex decoder,
                base64 encode online,
                base64 converter,
                base64 to text,
                online decoder,
                encode decode
            '
        ];

        $data = [
            'seo' => $this->seo
        ];
        return view('tools.base64-decode')->with($data);
    }

    public function JsonEncodeDecode(){

        $this->seo = [
            'title' => 'json encode',
            'description' => 'Decode or Encode JSON with advanced formatting options. Enter our site for an easy-to-use online tool.',
            'keywoards' => '
                json encode,
                json decode,
                json decode online,
                json encode online,
                json_encode,
                json_decode,
                parse json javascript,
                json_decode php,
            '
        ];

        $data = [
            'seo' => $this->seo
        ];

        return view('tools.json-encode')->with($data);
    }

}

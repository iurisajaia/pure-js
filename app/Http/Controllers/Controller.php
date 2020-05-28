<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;


class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Menu Items
    public $menu = [
        [
            'href' => '/border-radius',
            'image' =>  'radius.svg',
            'title' => 'Border Radius Generator'

        ],
        [
            'href' => '/linear-gradient',
            'image' =>  'gradient.svg',
            'title' => 'Linear Gradient Generator'

        ],
        [
            'href' => '/box-shadow',
            'image' =>  'shadow.svg',
            'title' => 'Box Shadow Generator'

        ],
        [
            'href' => '/html-formatter',
            'image' =>  'format.svg',
            'title' => 'HTML Formater'

        ],
        [
            'href' => '/minify-css',
            'image' =>  'compressor.svg',
            'title' => 'Minify / Beautify CSS'

        ],
        [
            'href' => '/minify-js',
            'image' =>  'jscompressor.svg',
            'title' => 'Minify JS'

        ],
        [
            'href' => '/json-encode',
            'image' =>  'json-encode.svg',
            'title' => 'JSON Encode / Decode'

        ],
        [
            'href' => '/json-formatter',
            'image' =>  'json.svg',
            'title' => 'JSON Formatter'

        ],
        [
            'href' => '/base64-decode',
            'image' =>  'encoding.svg',
            'title' => 'BASE64 Encode / Decode'

        ],
        [
            'href' => '/image-to-base64',
            'image' =>  'converter.svg',
            'title' => 'Image To Base64'

        ],
    ];

    public function __construct(){

        // Generate Seo
        $url = \Request::getRequestUri();
        $key = str_replace('/', '', $url);
        $seo = $this->getSeoData($key);


        View::share(['seo' => $seo , 'menu' => $this->menu]);
    }

    public function getSeoData($key = ''){
        switch ($key){
            case 'border-radius' :
                return $seo = [
                    'title' => 'Border Radius Generator',
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
            case 'linear-gradient' :
                return $seo = [
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
            case 'box-shadow' :
                return $seo = [
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
            case 'html-formatter' :
                return $seo = [
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
            case 'minify-css' :
                return $seo = [
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
            case 'minify-js' :
                return $seo = [
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
            case 'image-to-base64' :
                return $seo = [
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
            case 'json-formatter' :
                return $seo = [
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
            case 'base64-decode' :
                return $seo = [
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
            case 'json-encode' :
                return $seo = [
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

            default :
                return $seo = [
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
        }
    }
}

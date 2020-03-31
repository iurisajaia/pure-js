@extends('layout.layout')
@section('content')
    <div class="section-title-block">
        <h1 class="section-title">Box Shadow Generator</h1>
    </div>
    <div class="description">
        <h2>
            The box-shadow CSS property adds shadow effects around an element's frame. You can set multiple effects separated by commas.
            <br/>
            A box shadow is described by X and Y offsets relative to the element, blur and spread radius, and color.
        </h2>
    </div>
    <div class="border-radius-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="horizontal">Horizontal Length</label>
                <input type="range" class="input-range" id="horizontal" name="horizontal" value="10" min="-200" max="200"/>

                <label for="vertical">Vertical Length</label>
                <input type="range" class="input-range" id="vertical" name="vertical" value="10" min="-200" max="200"/>

                <label for="blur">Blur Radius</label>
                <input type="range" class="input-range" id="blur" name="blur" value="5" min="0" max="300"/>

                <label for="spread">Spread Radius</label>
                <input type="range" class="input-range" id="spread" name="spread" value="0" min="0" max="300"/>

                <label for="shadowColor">Shadow Color</label>
                <input type="color" class="input-range" id="shadowColor" name="color"/>
                <br/>
                <label for="backgroundColor">Background Color</label>
                <input type="color" class="input-range" id="backgroundColor" name="color" value="#fff"/>
                <br/>
                <label for="boxColor">Box Color</label>
                <input type="color" class="input-range" id="boxColor" name="color" value="#ffcd38"/>
                <br/>

                <label for="opacity">Opacity</label>
                <input type="range" class="input-range" id="opacity" name="opacity" value="1" min="0" max="1"/>

                <div class="code-container">
                    <code id="shadowCode">
                        border-radius : 0px 0px 0px 0px;
                    </code>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="result-box" id="shadowResult">

                </div>
                <div class="col-sm-12 col-md-12 text-center">
                    <div class="download-cv-block">
                        <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#shadowResult">Copy To Clipboard</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/radius.css')}}" type="text/css">
    @endpush
    @push('scripts')
        <script src="{{ asset('js/tools/shadow.js')}}"></script>
    @endpush
@endsection

@extends('layout.layout')
@section('content')
    @include( 'components.description' , ['title' => $seo['title'], 'description' =>  $seo['description']])
    <div class="border-radius-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="horizontal">Horizontal Length</label>
                <input type="range" oninput="horizontalChange(this.value)" class="input-range" id="horizontal" name="horizontal" value="10" min="-200" max="200"/>

                <label for="vertical">Vertical Length</label>
                <input type="range" oninput="verticalChange(this.value)" class="input-range" id="vertical" name="vertical" value="10" min="-200" max="200"/>

                <label for="blur">Blur Radius</label>
                <input type="range" oninput="blurChange(this.value)" class="input-range" id="blur" name="blur" value="5" min="0" max="300"/>

                <label for="spread">Spread Radius</label>
                <input type="range" oninput="spreadChange(this.value)" class="input-range" id="spread" name="spread" value="0" min="0" max="300"/>

                <label for="shadowColor">Shadow Color</label>
                <div id="shadowColor" class="input-group colorpicker-component">
                    <input type="text" value="rgba(0, 0, 0, 1)" class="form-control"/>
                    <span class="input-group-addon"><i></i></span>
                </div>
                <br/>
                <label for="backgroundColor">Background Color</label>
                <div id="backgroundColor" class="input-group colorpicker-component">
                    <input type="text" value="rgba(255,255,255,1)" class="form-control"/>
                    <span class="input-group-addon"><i></i></span>
                </div>
                <br/>
                <label for="boxColor">Box Color</label>
                <div id="boxColor" class="input-group colorpicker-component">
                    <input type="text" value="rgba(255, 205, 56,1)" class="form-control"/>
                    <span class="input-group-addon"><i></i></span>
                </div>
                <br/>
                <div class="code-container">
                    <code id="shadowCode">
                        border-radius : 0px 0px 0px 0px;
                    </code>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 " id="backgroundContainer">
                <div class="result-box" id="shadowResult">

                </div>
                <div class="col-sm-12 col-md-12 text-center">
                    <div class="download-cv-block">
                        <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#shadowCode">Copy To Clipboard</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/radius.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/shadow.min.css')}}" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    @endpush
    @push('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{ asset('js/tools/shadow.js')}}"></script>
        @endpush
@endsection

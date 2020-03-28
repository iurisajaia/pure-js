@extends('layout.layout')
@section('content')
    <div class="text-center">
        <h1>Border Radius Generator</h1>
    </div>
    <div class="border-radius-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="shadowAll">All Corner</label>
                <input type="range" class="input-range" id="shadowAll" name="all" value="0" min="0" max="50"/>

                <label for="shadow-top">Top</label>
                <input type="range" class="input-range" id="shadow-top" name="top" value="0" min="0" max="50"/>

                <label for="shadow-right">Right</label>
                <input type="range" class="input-range" id="shadow-right" name="right" value="0" min="0" max="50"/>

                <label for="shadow-bottom">Bottom</label>
                <input type="range" class="input-range" id="shadow-bottom" name="bottom" value="0" min="0" max="50"/>

                <label for="shadow-left">Left</label>
                <input type="range" class="input-range" id="shadow-left" name="left" value="0" min="0" max="50"/>

                <div class="code-container">
                <code id="code-result">
                    border-radius : 0px 0px 0px 0px;
                </code>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="result-box" id="shadow-result">

                </div>
                <div class="col-sm-12 col-md-12 text-center">
                    <div class="download-cv-block">
                        <button class="button" target="_blank" id="copy-to-clipboard">Copy To Clipboard</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

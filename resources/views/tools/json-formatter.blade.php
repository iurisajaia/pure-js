@extends('layout.layout')
@section('content')

    <div class="section-title-block">
        <h1 class="section-title">JSON Formatter</h1>
    </div>
    <div class="description">
        <h2>
            The JSON Formatter beautifies JSON data with advanced formatting algorithms.
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <textarea class="minify-textarea" id="jsonFormatterInput" placeholder="Paste your json here" cols="30" rows="10"></textarea>
            <div class="text-center">
                <button id="jsonFormatButton">Format</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <textarea class="minify-textarea" id="jsonFormatterOutput" cols="30" rows="10"></textarea>
            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#jsonFormatterOutput">Copy To Clipboard</button>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/minify-css.css')}}" type="text/css">
    @endpush
    @push('scripts')
        <script src="{{ asset('js/tools/json-formatter.js')}}"></script>
    @endpush
@endsection

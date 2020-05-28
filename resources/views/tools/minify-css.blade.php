@extends('layout.layout')
@section('content')
    @include( 'components.description' , ['title' => $seo['title'], 'description' =>  $seo['description']])
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" id="minifyCss" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button id="minifycssButton">Minify</button>
                <button id="maxifycssButton">Beautify</button>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" readonly id="minifyCssOutput" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#minifyCssOutput">Copy To Clipboard</button>
            </div>

        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/minifycss.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/tools/minify-css.css')}}" type="text/css">
    @endpush
    @push('scripts')
        <script src="{{ asset('js/tools/minify-css.js')}}"></script>
    @endpush


@endsection

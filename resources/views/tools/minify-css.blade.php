@extends('layout.layout')
@section('content')

    <div class="text-center">
        <h1>CSS Compressor</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" id="minifyCss" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button id="minifycssButton">Minify</button>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" id="minifyCssOutput" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button>Copy To Clipboard</button>
            </div>

        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/minify-css.css')}}" type="text/css">
    @endpush
    @push('scripts')
        <script src="{{ asset('js/tools/minify-css.js')}}"></script>
    @endpush


@endsection

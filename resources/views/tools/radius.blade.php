@extends('layout.layout')
@section('content')
        @include( 'components.description' , ['title' => $seo['title'], 'description' =>  $seo['description']])

        <div class="border-radius-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="shadowAll">All Corner</label>
                    <input type="range" class="input-range" id="shadowAll" onInput="allCornerMove(this.value)" name="all" value="0" min="0" max="50"/>

                    <label for="shadow-top">Top</label>
                    <input type="range" class="input-range" id="shadow-top" oninput="topCornerMove(this.value)" name="top" value="0" min="0" max="50"/>

                    <label for="shadow-right">Right</label>
                    <input type="range" class="input-range" id="shadow-right" oninput="rightCornerMove(this.value)" name="right" value="0" min="0" max="50"/>

                    <label for="shadow-bottom">Bottom</label>
                    <input type="range" class="input-range" id="shadow-bottom" oninput="bottomCornerMove(this.value)" name="bottom" value="0" min="0" max="50"/>

                    <label for="shadow-left">Left</label>
                    <input type="range" class="input-range" id="shadow-left" oninput="leftCornerMove(this.value)" name="left" value="0" min="0" max="50"/>

                    <div class="code-container">
                        <code id="code-result">
                            border-radius : 0% 0% 0% 0%;
                            -moz-border-radius: 0% 0% 0% 0%;
                            -webkit-border-radius: 0% 0% 0% 0%;
                        </code>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="result-box" id="shadow-result">

                    </div>
                    <div class="col-sm-12 col-md-12 text-center">
                        <div class="download-cv-block">
                            <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#code-result">
                                Copy To Clipboard
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/radius.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/radius.min.css')}}" type="text/css">
    @endpush
    @push('scripts')
        <script src="{{ asset('js/tools/radius.js')}}"></script>
    @endpush
@endsection

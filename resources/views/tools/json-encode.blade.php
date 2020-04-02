@extends('layout.layout')
@section('content')
    <div class="section-title-block">
        <h1 class="section-title">JSON Encode / Decode</h1>
    </div>
    <div class="description">
        <h2>
            Decode or Encode JSON with advanced formatting options. Enter our site for an easy-to-use online tool.
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" placeholder="Paste your text here" id="decodeTextArea" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button id="encodeBase">Encode</button>
                <button id="decodeBase">Decode</button>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea"  readonly id="decodeOutputArea" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#decodeOutputArea">Copy To Clipboard</button>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            // Encode
            $('#encodeBase').on('click', function(event){
                $(".preloader").fadeIn("slow");
                $data = {"text" : $("#decodeTextArea").val()};
                event.preventDefault();
                $.ajax({
                    url:"/api/json-encode",
                    method:"POST",
                    data: $data,
                    dataType:'JSON',
                    success:function(data)
                    {
                        $(".preloader").fadeOut("slow");
                        if(data){
                            $('#decodeOutputArea').html(data);
                        }
                    }
                })
            });

            // Decode
            $('#decodeBase').on('click', function(event){
                $(".preloader").fadeIn("slow");
                $data = {"text" : $("#decodeTextArea").val()};
                event.preventDefault();
                $.ajax({
                    url:"/api/json-decode",
                    method:"POST",
                    data: $data,
                    dataType:'JSON',
                    success:function(data)
                    {
                        $(".preloader").fadeOut("slow");
                        if(data){
                            $('#decodeOutputArea').html(data);
                        }
                    }
                })
            });
        });
    </script>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/minify-css.css')}}" type="text/css">
    @endpush
@endsection

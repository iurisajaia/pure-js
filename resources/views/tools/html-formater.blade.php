@extends('layout.layout')
@section('content')
    @include( 'components.description' , ['title' => $seo['title'], 'description' =>  $seo['description']])
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" id="htmlFormat" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button id="formatHtmlButton">Format</button>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">

            <textarea class="minify-textarea" readonly id="htmlFormatOutput" cols="30" rows="10"></textarea>

            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#htmlFormatOutput">Copy To Clipboard</button>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#formatHtmlButton').on('click', function(event){
                $(".preloader").fadeIn("slow");
                $data = {"text" : $("#htmlFormat").val()};
                event.preventDefault();
                $.ajax({
                    url:"/api/html-formater",
                    method:"POST",
                    data: $data,
                    dataType:'JSON',
                    success:function(data)
                    {
                        $(".preloader").fadeOut("slow");
                        if(data){
                            $('#htmlFormatOutput').html(data);
                        }
                    }
                })
            });

        });
    </script>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/htmlformatter.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/tools/minify-css.css')}}" type="text/css">
    @endpush
@endsection

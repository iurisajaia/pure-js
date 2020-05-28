@extends('layout.layout')
@section('content')
    @include( 'components.description' , ['title' => $seo['title'], 'description' =>  $seo['description']])
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form method="post" id="upload_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="select_file">Select File For Converting</label>
                <br/><br/>
                <div class="select_file_container">
                <input type="file" name="select_file" id="select_file" required/>
                </div>
                <br/><br/>
                <button>Upload</button>
                <p class="error-text" id="errorText"></p>

            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="resultArea">For use in img elements:</label>
            <textarea class="minify-textarea" id="resultArea" cols="30" rows="10" readonly></textarea>
            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#resultArea">Copy To Clipboard</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="resultAreaCss">For use as CSS background:</label>
            <textarea class="minify-textarea" id="resultAreaCss" cols="30" rows="10" readonly></textarea>
            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#resultAreaCss">Copy To Clipboard</button>
            </div>
        </div>
    </div>





    </div>

    <script type="text/javascript">

        $('#select_file').on("change", function () {

        });



        $(document).ready(function(){
            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $(".preloader").fadeIn("fast");
                $.ajax({
                    url:"/api/image-to-base64",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        $(".preloader").fadeOut("slow");
                        if(data){
                            $('#resultArea').html(`data:image/png;base64,${data}`);
                            $('#resultAreaCss').html(`url('data:image/png;base64,${data}')`);
                            $('#errorText').html('')
                        }
                    },
                    error : function(){
                        $(".preloader").fadeOut("slow");
                        $('#errorText').html('Max File Size 8MB')
                    }
                })
            });

        });
    </script>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/imagetobase.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/tools/minify-css.css')}}" type="text/css">
    @endpush
@endsection


@extends('layout.layout')
@section('content')
    <div class="section-title-block">
        <h1 class="section-title">Image To BASE64</h1>
    </div>
    <div class="description">
        <h2>
            Optimize your images and convert them to base64 online. Drag & Drop your files, copy to clipboard with a click and use the result in HTML and CSS.
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form method="post" id="upload_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="select_file">Select File For Converting</label>
                <br/><br/>
                <input type="file" name="select_file" id="select_file" />
                <br/><br/>
                <button>Upload</button>

            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="resultArea">For use in img elements:</label>
            <textarea class="minify-textarea" id="resultArea" cols="30" rows="10" disabled></textarea>
            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#resultArea">Copy To Clipboard</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="resultAreaCss">For use as CSS background:</label>
            <textarea class="minify-textarea" id="resultAreaCss" cols="30" rows="10" disabled></textarea>
            <div class="text-center">
                <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#resultAreaCss">Copy To Clipboard</button>
            </div>
        </div>
    </div>





    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#upload_form').on('submit', function(event){
                $(".preloader").fadeIn("slow");
                event.preventDefault();
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


@extends('layout.layout')
@section('content')
    <h1>Image To base64</h1>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <input type="file" id="imageToBase" name="image">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12"></div>
    </div>
    <script>
        $(document).ready(function(){

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $("#imageToBase").change(function(){
                var uploader = $('#imageToBase');
                var data = new FormData();
                data.append('image' , uploader.files)
                $.ajax({
                    /* the route pointing to the post function */
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/api/image-to-base64',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, data},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        console.log(data)
                    }
                });
            });
        });
    </script>
    @push('scripts')
        <script src="{{ asset('js/tools/imageToBase.js')}}"></script>
    @endpush
@endsection

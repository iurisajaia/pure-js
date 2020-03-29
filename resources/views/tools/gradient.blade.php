@extends('layout.layout')
@section('content')
    <h1>Gradient</h1>
    <div class="border-radius-container">
        <div class="row">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item active">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#linear" role="tab" aria-controls="pills-home" aria-selected="true">Linear</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#radial" role="tab" aria-controls="pills-profile" aria-selected="false">Radial</a>
                </li>
              </ul>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade  active in" id="linear" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div>
                            <div class="col-lg-g col-md-6 col-sm-12">
                              <div>
                                <form>
                                  <div>
                                    <h3>Select Colors</h3>
                                    <div>
                                      <span>Add Color</span>
                                      <i class="fas fa-plus-circle" id='addColor'>
                                      </i>
                                    </div>
                                    <div class="color-container" id="color-container">
                                </div>
                                  </div>
                                  <div class="form-group">
                                    <label htmlFor="directions">Select Directions</label>
                                    <select id="directions" class="form-control">
                                      <option value="">unset</option>
                                      <option value="to bottom">to bottom</option>
                                      <option value="to top">to top</option>
                                      <option value="to left">to left</option>
                                      <option value="to right">to right</option>
                                      <option value="to bottom left">to bottom left</option>
                                      <option value="to bottom right">to bottom right</option>
                                      <option value="to top left">to top left</option>
                                      <option value="to top right">to top right</option>
                                    </select>
                                  </div>
                                  <div>
                                    <label for="degree">Degree</label>
                                    <input type="range" class="input-range" id="degree" name="degree" value="0" min="-360" max="360"/>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="radial" role="tabpanel" aria-labelledby="pills-profile-tab">Radial</div>
                  </div>
                  <div class="code-container">
                    <code id="code-result">
                    
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
    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/gradient.css')}}" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    @endpush
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{ asset('js/tools/gradient.js')}}"></script>
    @endpush
@endsection

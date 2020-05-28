@extends('layout.layout')
@section('content')
    @include( 'components.description' , ['title' => $seo['title'], 'description' =>  $seo['description']])
    <div class="border-radius-container">
        <div class="row">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item ">
              <a class="nav-link" id="pills-linear-tab"  href="/linear-gradient" role="tab" aria-controls="pills-home" aria-selected="true">Linear</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link active" id="pills-radial-tab"  href="/radial-gradient" role="tab" aria-controls="pills-profile" aria-selected="false">Radial</a>
            </li>
          </ul>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active in" id="radial" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <div>
                        <div class="col-lg-g col-md-6 col-sm-12">
                          <div>
                            <form>
                              <div>
                                <h3>Select Colors</h3>
                                <div>
                                  <span>Add Color</span>
                                  <i class="fas fa-plus-circle" id='addRadialColor'>
                                  </i>
                                </div>
                                <div class="color-container" id="radialColorContainer">
                            </div>
                              </div>
                              <div class="form-group">
                                <label htmlFor="shapes">Select Shapes</label>
                                <select id="shapes" class="form-control">
                                  <option value="">unset</option>
                                  <option value="circle">circle</option>
                                  <option value="ellipse">ellipse</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label htmlFor="directions">Select Directions</label>
                                <select id="shape-directions" class="form-control">
                                  <option value="">unset</option>
                                  <option value="closest-corner">closest-corner</option>
                                  <option value="closest-side">closest-side</option>
                                  <option value="farthest-corner">farthest-corner</option>
                                  <option value="farthest-side">farthest-side</option>
                                </select>
                              </div>
                              <div>
                                <label for="centerx">CenterX</label>
                                <input type="range"  oninput="changeX(this.value)" class="input-range" id="centerx" name="centerx" value="50" min="0" max="100"/>
                            </div>
                            <div>
                              <label for="centery">CenterY</label>
                              <input type="range"  oninput="changeY(this.value)" class="input-range" id="centery" name="centery" value="50" min="0" max="100"/>
                          </div>
                            </form>
                          </div>
                        </div>
                        <div class="code-container">
                          <code id="radial-code">
                          </code>
                          </div>
                      </div>

                    </div>
                  </div>
             </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="result-box" id="gradient-result">

                </div>
                <div class="col-sm-12 col-md-12 text-center">
                    <div class="download-cv-block">
                        <button target="_blank" data-clipboard-action="copy" class="button" data-clipboard-target="#radial-code">Copy To Clipboard</button>
                    </div>
                </div>
            </div>
    </div>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('/css/tools/gradient.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/gradient.min.css')}}" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    @endpush
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{ asset('js/tools/radial-gradient.js')}}"></script>
    @endpush
@endsection

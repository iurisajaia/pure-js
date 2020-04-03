@extends('layout.layout')
@section('content')


              <!-- Subpages -->
              <div class="subpages">
                <!-- About Me Subpage -->
                <section class="pt-page-1" data-id="about_me">
                  <div class="section-title-block">
                    <h2 class="section-title">Home</h2>
                  </div>

                  <div class="row">
                    <div class="col-md-12 col-sm-12 subpage-block">
                      <div class="general-info">
                        <h3>CSS-TOOL.COM</h3>
                        <p>Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec. Fusce eget urna ante. Donec massa velit, varius a accumsan ac, tempor iaculis massa. Sed placerat justo sed libero varius vulputate. Ut a mi tempus massa malesuada fermentum.</p>
                        <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus. Sed tellus nibh, lobortis ut blandit sed, convallis a mauris.</p>
                      </div>
                    </div>


{{--                    <div class="col-sm-6 col-md-6 col-sm-12 subpage-block">--}}
{{--                    </div>--}}
                  </div>

                  <!-- Services block -->
                  <div class="block-title">
                    <h3>Services</h3>
                  </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/border-radius" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/radius.svg" alt="border radius" title="border radius" />
                                    <h4>Border Radius Generator</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/linear-gradient" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/gradient.svg" alt="css gradient" title="css gradient" />
                                    <h4>Linear Gradient Generator</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/box-shadow" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/shadow.svg" alt="box shadow" title="box shadow" />
                                    <h4>Box Shadow Generator</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/html-formater" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/format.svg" alt="html formatter" title="html formatter" />
                                    <h4>HTML Formater</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/minify-css" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/compressor.svg" alt="minify css" title="minify css" />
                                    <h4>Minify / Beautify CSS</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/minify-js" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/jscompressor.svg" alt="minify js" title="minify js" />
                                    <h4>Minify JS</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/json-encode" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/json-encode.svg" alt="json decode" title="json decode" />
                                    <h4>JSON Encode / Decode</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/json-formatter" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/json.svg" alt="json formatter" title="json formatter" />
                                    <h4>JSON Formatter</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/base64-decode" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/encoding.svg" alt="base64 decode" title="base64 decode" />
                                    <h4>BASE64 Encode / Decode</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/image-to-base64" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/converter.svg" alt="image to base64" title="image to base64" />
                                    <h4>Image To Base64</h4>
                                </div>
                            </a>
                        </div>


                    </div>
                  <!-- End of Services block -->

                </section>
                <!-- End of About Me Subpage -->



              </div>

@endsection

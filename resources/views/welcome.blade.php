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
                        <p>Css is the best way for your creative and cool layouts, although sometimes it might be difficult since it requires  time to really understand it's key, foundational concepts.</p>
                        <p>The best knews is that our website offers  comprehensive css toolset which will make any developer's life easier.</p>
                      </div>
                    </div>


                  </div>

                  <!-- Services block -->
                  <div class="block-title">
                    <h3>Services</h3>
                  </div>

                    <div class="row">

                        @foreach($menu as $item)
                            @include('components.menuItem' , [
                                'href' => $item['href'],
                                'image' => $item['image'],
                                'title' => $item['title']
                            ])
                        @endforeach

                    </div>
                  <!-- End of Services block -->

                </section>
                <!-- End of About Me Subpage -->



              </div>

@endsection
@push('styles')
    <link rel="preload" href="{{ asset('/css/bootstrap/welcome.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
{{--    <link preload rel="stylesheet" href="{{ asset('/css/bootstrap/welcome.min.css')}}" type="text/css">--}}
@endpush

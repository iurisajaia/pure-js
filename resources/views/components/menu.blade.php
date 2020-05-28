<div id="menu-overlay">

    <div class="close-modal" >
        <img src="{{asset('images/svg/closered.svg')}}" alt="close" title="close" class="modalChanger" />
    </div>

    <div class="subpages">


        <section class="pt-page-1" data-id="about_me">

            <div class="row">
                @foreach($menu as $item)
                    @include('components.menuItem' , [
                        'href' => $item['href'],
                        'image' => $item['image'],
                        'title' => $item['title']
                    ])
                @endforeach
            </div>

        </section>



    </div>
</div>

<footer>
    <div class="container text-white d-flex">
        <div>
            <div class="pe-3 pt-5">
                <h4>DC COMICS</h4>
                <ul>
                    @foreach ($topbar as $item)
                        <li><a class="text-white opacity-50" href="#">{{$item['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4>SHOP</h4>
                <ul>
                    <li><a class="text-white opacity-50" href="#">Shop Dc</a></li>
                    <li><a class="text-white opacity-50" href="#">Shop Dc Collectibles</a></li>
                </ul>
            </div>
        </div>
        
        <div class="pe-3 pt-5">
            <h4>DC</h4>
            <ul>
                @foreach ($footbar['list'] as $item)
                    <li><a class="text-white opacity-50" href="#">{{$item}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="pt-5">
            <h4 class="ps-2">SITES</h4>
            <ul>
                @foreach ($footbar['listDc'] as $item)
                    <li><a class="text-white opacity-50" href="#">{{$item}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="logo_footer">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo Dc">
        </div>
    </div>
    <div class="footbar py-y5">

        <div class="container py-4 d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary text-white" disabled>SIGN UP NOW!</button>
            <div class="d-flex align-items-center">
                <div class="text-primary pe-3">FOLLOW US</div>
                <div>
                    @foreach ($footbar['icon'] as $item)
                    <img class="ps-3" src="{{Vite::asset($item)}}" alt="icon">
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    
</footer>
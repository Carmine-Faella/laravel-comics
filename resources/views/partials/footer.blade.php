<footer>
    <div class="container text-white d-flex">
        <div>
            <div class="pe-3 pt-5">
                <h2>DC COMICS</h2>
                <ul>
                    @foreach ($headerList as $item)
                        <li><a class="text-white opacity-50" href="#">{{$item['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2>SHOP</h2>
                <ul>
                    <li><a class="text-white opacity-50" href="#">Shop Dc</a></li>
                    <li><a class="text-white opacity-50" href="#">Shop Dc Collectibles</a></li>
                </ul>
            </div>
        </div>
        
        <div class="pe-3 pt-5">
            <h2>DC</h2>
            <ul>
                @foreach ($footerList as $item)
                    <li><a class="text-white opacity-50" href="#">{{$item}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="pt-5">
            <h2 class="ps-2">SITES</h2>
            <ul>
                <li><a class="text-white opacity-50" href="#">DC</a></li>
                <li><a class="text-white opacity-50" href="#">MAD Magazine</a></li>
                <li><a class="text-white opacity-50" href="#">DC Kids</a></li>
                <li><a class="text-white opacity-50" href="#">DC Universe</a></li>
                <li><a class="text-white opacity-50" href="#">DC Power Visa</a></li>
            </ul>
        </div>
        <div class="logo_footer">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo Dc">
        </div>
    </div>
    <div class="footbar bg-black py-y5">

        <div class="container py-5 d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary text-white" disabled>SIGN UP NOW!</button>
            <div class="d-flex align-items-center">
                <div class="text-primary pe-3">FOLLOW US</div>
                <div>
                    <img class="ps-3" src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="icon">
                    <img class="ps-3" src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="icon">
                    <img class="ps-3" src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="icon">
                    <img class="ps-3" src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="icon">
                    <img class="ps-3" src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="icon">
                </div>
            </div>
        </div>

    </div>
    
</footer>
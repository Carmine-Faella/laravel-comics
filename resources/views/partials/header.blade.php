<header class="py-3">

    <div class="container">
        <nav class='d-flex align-items-center justify-content-between'>
            <div class="logo"> 
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo Dc">
            </div>
            <ul class="list-nav list-unstyled">
                @foreach ($headerList as $item)
                    <li class="d-inline-block pe-3"><a class="text-decoration-none text-black" href="{{$item['href']}}">{{$item['title']}}</a></li>
                @endforeach
            </ul>
            <div>
                <input type="text" placeholder='Search' class="border-start-0 border-end-0 border-top-0 mb-2">
            </div>
        </nav>
    </div>


</header>
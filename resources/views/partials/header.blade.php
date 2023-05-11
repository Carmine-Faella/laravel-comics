<header>

        <div class="topbar bg-primary">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="text-white pe-5">DC POWER VISA</div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        ADDITIONAL DC SITES
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>

    <div class="container">
        <nav class='d-flex align-items-center justify-content-between'>
            <div class="logo"> 
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo Dc">
            </div>
            <ul>
                @foreach ($headerList as $item)
                    <li class="d-inline-block pt-3 pe-3"><a class="text-decoration-none text-black" href="{{$item['href']}}">{{$item['title']}}</a></li>
                @endforeach
            </ul>
            <div>
                <input type="text" placeholder='Search' class="border-start-0 border-end-0 border-top-0 border-primary">
            </div>
        </nav>
    </div>


</header>
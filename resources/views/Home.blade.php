@extends('layout.app')

@section('page-title', 'Home page')

@section('content')
    <div class="jumbotron">

        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="logo Dc" class="w-100">

    </div>

    <section id="#img_cnt" class="bg-black">

        <div class="container">
            <div class="img_wrapper py-5">
                @foreach ($comicsList as $comic)
                    <div class="img_wrap py-5">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <div class="text-center text-white">{{$comic['title']}}</div>
                    </div>
                    
                @endforeach
            </div>
        </div>
        <div class="text-center pb-5">
            <button type="button" class="btn btn-primary px-4">LOAD MORE</button>
        </div>
    </section>
@endsection
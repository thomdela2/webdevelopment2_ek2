@extends('layout')

@section('content')
    <div class="section section-news">
        <div class="section-news-content">

            <div class="section-news-post">
                <img class="img" src="{{URL::asset('images/header-img.jpg')}}" alt="header-img">
                <a class="p reg">Down the river</a>
                <a class="p light">22.08.2020</a>
                <div class="buy-btn">
                    <a href="{{route('news.edit', 1)}}" class="btn p reg member">Read</a>
                </div>
            </div>

            <div class="section-news-post">
                <img class="img" src="{{URL::asset('images/section-img.jpg')}}" alt="header-img">
                <a class="p reg">Down the river</a>
                <a class="p light">22.08.2020</a>
                <div class="buy-btn">
                    <a href="{{route('news.edit', 2)}}" class="btn p reg member">Read</a>
                </div>
            </div>

        </div>
    </div>
@endsection

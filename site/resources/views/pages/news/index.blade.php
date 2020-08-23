@extends('layout')

@section('content')
    <div class="section section-news">
        <div class="section-news-content">
            @foreach ($blogs as $blog)

            <div class="section-news-post">
                {{-- <img class="img" src="{{URL::asset('images/section-img.jpg')}}" alt="header-img"> --}}
            <img class="img" src="{{ asset('storage/images/'.$blog->image) }}" alt="{{$blog->image}}">
                <a class="p reg">{{$blog->title}}</a>
                <a class="p light">{{$blog->created_at}}</a>
                <a href="{{route('news.edit', $blog->id)}}" class="p reg">Edit</a>
                <a href="{{route('news.delete', $blog->id)}}" class="p light">Delete</a>
                <div class="buy-btn">
                    <a href="{{route('news.detail', $blog->id)}}" class="btn p reg member">{{__('Read')}}</a>
                </div>
            </div>

            @endforeach


        </div>
    </div>
@endsection

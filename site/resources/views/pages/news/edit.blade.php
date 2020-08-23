@extends('layout')

@section('content')
<div class="section section-form">
    <form class="edit" action="{{route('news.save')}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="news_image" value="{{asset('storage/images/'.$blog->image)}}">
        <input class="p light" type="text" name="news_title" placeholder="{{__('Title')}}" value="{{old('news_title', $blog->title)}}">
        <input class="p light" type="text" name="news_synopsis" placeholder="{{__('Synopsis')}}" value="{{old('news_synopsis', $blog->synopsis)}}">
        <div class="buy-btn">
            @if (isset($blog))
            <input class="btn" type="submit" value="{{__('Edit')}}">
            @else
            <input class="btn" type="submit" value="{{__('Add')}}">
            @endif

        </div>
        <div class="section-form-error">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <a class="p light">{{$error}}</a>
            @endforeach
            @endif
        </div>

    </form>
</div>

@endsection

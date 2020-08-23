@extends('layout')

@section('content')
<div class="section section-form">
    <form class="edit" action="{{route('news.save')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="news_image">
        <input class="p light" type="text" name="news_title" placeholder="{{__('Title')}}">
        <input class="p light" type="text" name="news_synopsis" placeholder="{{__('Synopsis')}}">
        <div class="buy-btn">
            <input class="btn" type="submit" value="{{__('Add')}}">
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

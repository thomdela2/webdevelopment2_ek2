@extends('layout')

@section('content')
    <div class="section section-detail">
        <div class="section-detail-content">

            <img src="{{ asset('storage/images/'.$blog->image) }}" alt="{{$blog->image}}">
            <a class="title reg">{{$blog->title}}</a>
            <a class="p light">{{$blog->synopsis}}</a>
        </div>
    </div>
@endsection

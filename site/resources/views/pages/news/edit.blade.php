@extends('layout')

@section('content')
    <div class="section section-form">
        <form class="edit" action="{{route('news.save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="news_image">
            <input class="p light" type="text" name="news_title" placeholder="Titel">
            <input class="p light" type="text" name="news_synopsis" placeholder="Synopsis">
            <div class="buy-btn">
                <input class="btn" type="submit" value="Add">
            </div>

        </form>
    </div>

@endsection

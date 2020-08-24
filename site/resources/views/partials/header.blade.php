<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webdevelopment2</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">



</head>
<div class="container">
    <div class="header">
        <div class="header-content">
            <div class="header-content-left">
                <a class="p reg" href="{{route('home.index')}}">{{__('Home')}}</a>
                <a class="p light" href="{{route('about.index')}}">{{__('About')}}</a>
                <a class="p light" href="{{route('news.index')}}">{{__('News')}}</a>
                <a class="p light" href="{{route('contact')}}">{{__('Contact')}}</a>
            </div>
            <div class="header-content-right">
                <a href="https://apps.apple.com/nl/app/vsco-foto-en-video-editor/id588013838" target="_blank" class="p reg btn header-btn" href="">{{__('Get the app')}}</a>
                @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class="p light btn header-btn">{{__('Login')}}</a>
                @endif
                @else
                <a href="{{route('backoffice.index')}}" class="p light right">{{Auth::User()->firstname}}</a>
                @endguest


            </div>
        </div>
    </div>

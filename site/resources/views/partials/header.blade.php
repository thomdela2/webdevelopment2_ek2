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
                <a class="p reg" href="{{route('home.index')}}">Home</a>
                <a class="p light" href="{{route('news.index')}}">News</a>
                <a class="p light" href="#">Contact</a>
            </div>
            <div class="header-content-right">
                    <a href="https://apps.apple.com/nl/app/vsco-foto-en-video-editor/id588013838" target="_blank" class="p reg btn header-btn" href="">Get the app</a>
            </div>
        </div>
    </div>

@extends('layout')

@section('content')
<div class="section">
    <a href="{{route('memberships.new')}}" class="p light">Add membership</a>
    <a href="{{route('news.new')}}" class="p light">Add post</a>
    <a href="#" class="p light">Add user</a>
    <form action="{{route('logout')}}" method="post">
        <div class="buy-btn">
            @csrf
            <input class="btn" type="submit" value="Logout">
        </div>

    </form>
</div>
@endsection

{{-- TODO: --}}
{{--
    _ Routes naar edits memberships, posts
    _ Overzicht van inkomsten van memberships
    _ New user maken
 --}}

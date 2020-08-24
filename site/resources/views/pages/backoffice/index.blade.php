@extends('layout')

@section('content')
<div class="section">
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

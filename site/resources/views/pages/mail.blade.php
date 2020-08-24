@extends('layout')

@section('content')
<div class="section">
    <form class="edit" action="{{route('mail.save')}}" method="post">
        @csrf
        <input class="p light" type="email" name="emailaddress" placeholder="Emailaddress">
        <input class="p light" type="text" name="subject" placeholder="Subject">
        <input class="p light" type="text" name="content" placeholder="Content">
        <div class="buy-btn">
            <input class="btn" type="submit" value="Send">
        </div>
    </form>
</div>
@endsection

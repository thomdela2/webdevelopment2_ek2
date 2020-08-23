@extends('layout')

@section('content')
<div class="section section-form">
    <form class="edit" action="{{route('memberships.save')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input class="p light" type="text" name="memberships_name" placeholder="{{__('Name')}}">
        <input class="p light" type="number" name="memberships_price" placeholder="{{__('Price')}}">
        <input class="p light" type="text" name="memberships_description" placeholder="{{__('Desciption')}}">
        <input class="p light" type="text" name="memberships_features" placeholder="{{__('Features')}}">

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

@extends('layout')

@section('content')
<div class="section section-form">
    <form class="edit" action="{{route('memberships.save')}}" method="post" enctype="multipart/form-data">
        @csrf
    @if ($membership)
        <input type="hidden" name="id" value="{{$membership->id}}">
    @endif
    <input class="p light" type="text" name="memberships_name" placeholder="{{__('Name')}}" value="{{old('memberships_name', $membership->name)}}">
        <input class="p light" type="number" name="memberships_price" placeholder="{{__('Price')}}" value="{{old('memberships_price', $membership->price)}}">
        <input class="p light" type="text" name="memberships_description" placeholder="{{__('Desciption')}}" value="{{old('memberships_description', $membership->description)}}">
        <input class="p light" type="text" name="memberships_features" placeholder="{{__('Features')}}" value="{{old('memberships_features', $membership->features)}}">

        <div class="buy-btn">
            @if ($membership)
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

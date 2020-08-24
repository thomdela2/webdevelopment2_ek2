@extends('layout')

@section('content')
    <div class="section section-image">
        <img class="img center" src="{{URL::asset('images/header-img.jpg')}}" alt="header-img">
    </div>

    <div class="section section-image">
        <img class="img bottom" src="{{URL::asset('images/section-img.jpg')}}" alt="section-img">
    </div>

    <div class="section section-price">
        <div class="section-price-content">
            @foreach ($memberships as $membership)
        <div class="section-price-content-package vsco-free">
            <a class="title reg w">{{$membership->name}}</a>
            <a class="p light w">{{$membership->description}}</a>
            <div class="buy-btn">
                @if ($membership->price == 0)
                <a href="{{route('memberships.pay', $membership->id)}}" class="p reg btn price-btn free">{{__('Download VSCO')}}</a>
                @else
                <a href="{{route('memberships.pay', $membership->id)}}" class="p reg btn price-btn member">{{__('Buy now')}}</a>
                @endif

            </div>
            <div class="vsco-list-item">
                <a class="p w">€</a>
                <a class="p w">{{$membership->price}}</a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection

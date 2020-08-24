@extends('layout')

@section('content')

<div class="section section-price">

    <div class="section-price-content">
        @foreach ($memberships as $membership)
        <div class="section-price-content-package vsco-free">
            <a class="title reg w">{{$membership->name}}</a>
            <a class="p light w">{{$membership->description}}</a>
            <div class="buy-btn">
                @if ($membership->price == 0)
                {{-- <form action="{{route('memberships.pay')}}" method="post">
                    @csrf
                    <input type="hidden" name="membership_id" value="{{$membership->id}}">
                    <input class="p reg btn price-btn free" type="submit" value="Download VSCO">
                </form> --}}
                <a href="https://apps.apple.com/nl/app/vsco-foto-en-video-editor/id588013838" target="_blank" class="p reg btn price-btn free">{{__('Download VSCO')}}</a>


                @else
                {{-- <form action="{{route('memberships.pay')}}" method="post">
                    @csrf
                    <input type="hidden" name="membership_id" value="{{$membership->id}}">
                    <input class="p reg btn price-btn member" type="submit" value="Buy now">
                </form> --}}
                <a href="{{route('memberships.pay', $membership->id)}}" class="p reg btn price-btn member">{{__('Buy now')}}</a>
                @endif

            </div>
            @guest
                @if (Route::has('login'))
                @endif
                @else
                <a href="{{route('memberships.edit', $membership->id)}}" class="p reg w">Edit</a>
                <a href="{{route('memberships.delete', $membership->id)}}" class="p light w">Delete</a>
                @endguest
            <div class="vsco-list-item">
                <a class="p w">€</a>
                <a class="p w">{{$membership->price}}</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection

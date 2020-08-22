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
            <div class="section-price-content-package vsco-free">
                    <a class="title reg w">VSCO</a>
                    <a class="p light w">Free</a>
                <div class="buy-btn">
                    <a href="#" class="p reg btn price-btn free">Download VSCO</a>
                </div>
                    <div class="vsco-list-item">
                        <a class="p sign w">Arrow</a>
                        <a class="p w">feature</a>
                    </div>
            </div>
            <div class="section-price-content-package vsco-member">
                    <a class="title reg w">VSCO Memberschip</a>
                    <a class="p light w">Annual or monthly subscription</a>
                <div class="buy-btn">
                    <a href="#" class="p reg btn price-btn member">Buy now</a>
                </div>
                    <div class="vsco-list-item">
                        <a class="p sign w">Arrow</a>
                        <a class="p w">feature</a>
                    </div>

            </div>
            <div class="section-price-content-package vsco-member">
                <a class="title reg w">VSCO Pro Memberschip</a>
                <a class="p light w">Annual or monthly subscription</a>
            <div class="buy-btn">
                <a href="#" class="p reg btn price-btn member">Buy now</a>
            </div>
                <div class="vsco-list-item">
                    <a class="p sign w">Arrow</a>
                    <a class="p w">feature</a>
                </div>

        </div>
        </div>
    </div>
@endsection

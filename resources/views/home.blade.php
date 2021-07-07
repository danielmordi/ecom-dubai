@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
@include('includes.theme.banner')
<div class="container-fluid" style="margin-top: 2em">
    <div class="row" style="margin-top: 1em">
        <div class="col-md-2">
            <div class="nav-link d-block d-sm-none" class="flow-text">
                <span class="">Categories</span>:
                <a style="padding-left: 1em" href="">All</a>
                @foreach ($categories as $category)
                    <a style="padding-left: 1em" href="">{{ $category->name }}</a>
                @endforeach
            </div>
            <ul class="list-group d-none d-sm-block">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="text-uppercase font-weight-bold">Categories</span>
                </li>
                @foreach ($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" class="w-100 text-left">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-10 col-sm-12">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" style="">
                        <div class="card shadow-lg mb-5 bg-white rounded">
                            <small class=""
                                style="position: absolute; top: 10px; color: green; padding: 0.5em; background:#fff; font-size:10px; font-weight: bold; letter-spacing: 1.5px">FREE
                                DELIVERY</small>
{{--                            @dd($product->slug)--}}
                            <a href="{{ route('view', $product->slug) }}">
                                <img src="{{ asset('uploads/'.$product->product_image) }}"
                                class="card-img-top" alt="" style="object-fit: cover; min-height: 200px !important;">
                            </a>
                            <div class="card-body">
                                <h6 style="font-family: 'Tajawal', sans-serif;">{{ $product->product_name }}</h6>
                                <div class="d-flex justify-content-between mb-2">
                                    <div style="font-size: 18px; font-family: 'Tajawal', sans-serif; letter-spacing: -1px;">
                                        {{ $product->product_price }}
                                    </div>
                                    <div class="text-danger"
                                    style="font-family: 'Tajawal', sans-serif; text-decoration: line-through; font-size: 12px;
                                        position: relative; top: 8px;">
                                        {{ $product->discounted_price }}
                                    </div>
                                </div>
                                <a href="{{ route('view', $product->slug) }}" class="card-footer btn btn-dark btn-sm w-100 bg-primary text-uppercase">Buy Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</div>
@endsection

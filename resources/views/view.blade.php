@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
<div class="container-fluid" style="margin-top: 2em">
    <div class="row" style="margin-top: 1em">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-6 col-sm-12 h-100">
                    <div class="p-2">
                        <img src="{{ asset('uploads/'.$product->product_image) }}" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="text-uppercase mt-2">{{ $product->product_name }}</h4>
                    <div class="mt-4" style="position: relative; top: -20px;">
                        @foreach ($categories as $category)
                        @foreach ($product->categories as $productCategory)
                        @if ($category->id == $productCategory->id)
                        <small>
                            <a href="" class="text-muted ml-2">{{ $productCategory->name }}</a>
                        </small>
                        @endif
                        @endforeach
                        @endforeach
                    </div>

                    <h1 style="font-family: 'Tajawal', sans-serif; letter-spacing: -1px;">
                        {{ $product->product_price }}
                    </h1>
                    <p class="text-muted mb-0">{{ $product->product_sold }} sold</p>
                    <p class="text-muted">{{ $product->product_stock_conut }} in stock</p>
                </div>
                <div class="col-md-6 col-sm-12 h-100 pt-2">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-body">
                            <h5 class="card-title">Order Now</h5>
                            @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session('success') }}</strong>
                            </div>
                            @else
                            <form action="{{ route('order.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="form-group mb-2 @error('name') is-invalid @enderror">
                                    <label for="">Fullname<small class="text-danger">*</small></label>
                                    <input type="text" name="name" value="{{ old('name') }}" id="name"
                                        placeholder="Full name" class="form-control" required>
                                    @error('name')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Tel<small class="text-danger">*</small></label>
                                    <input type="tel" name="tel_no" value="{{ old('tel_no') }}" id="tel_no"
                                        placeholder="052XXXXXX"
                                        class="form-control pl-4 @error('tel_no') is-invalid @enderror" required=""
                                        style="padding-left: 86px;">
                                    <img src="https://www.brothers.ae/lib/img/AE.png" alt="" width="20" style="
                                        position: absolute;
                                        top: 162px;
                                        left: 37px;
                                        width: 20px;
                                        height: 26px;">
                                    <div class="code" style="
                                        position: absolute;
                                        top: 165px;
                                        left: 65px;
                                        font-size: 14px;
                                        font-weight: 500;
                                    ">+971</div>
                                    @error('tel_no')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Quantity<small class="text-danger">*</small></label>
                                    <select class="form-control @error('qty') is-invalid @enderror" name="qty" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    @error('qty')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Emirates<small class="text-danger">*</small></label>
                                    <select class="form-control @error('city') is-invalid @enderror" name="city" id="">
                                        <option value="">Select City*</option>
                                        <option value="DUBAI">DUBAI - Free delivery</option>
                                        <option value="ABU DHABI">ABU DHABI - Free delivery</option>
                                        <option value="SHARJAH">SHARJAH - Free delivery</option>
                                        <option value="AJMAN">AJMAN - Free delivery</option>
                                        <option value="RAK">RAK - Free delivery</option>
                                        <option value="FUJAIRAH">FUJAIRAH - Free delivery</option>
                                        <option value="UAQ">UAQ - Free delivery</option>
                                        <option value="AL AIN">AL AIN - Free delivery</option>
                                    </select>
                                    @error('city')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Delivery Address<small class="text-danger">*</small></label>
                                    <textarea style="min-height:70px !important"
                                        class="form-control @error('addr') is-invalid @enderror" name="addr"
                                        placeholder="Delivery Address* (Building No, Street name, Area)"
                                        required="required">{{ old('addr') }}</textarea>
                                    @error('addr')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary w-100 text-uppercase">order now</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="text-muted">Description</h5>
                <p class="lead">
                    {{ $product->product_description }}
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa voluptatem cupiditate! Nihil
                    laboriosam,
                    numquam neque iste placeat sequi, magni quibusdam soluta facere nostrum eligendi labore ex porro
                    possimus quas!
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2>You may also like</h2>
    <hr>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" style="">
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <small class=""
                        style="position: absolute; top: 10px; color: green; padding: 0.5em; background:#fff; font-size:10px; font-weight: bold; letter-spacing: 1.5px">FREE
                        DELIVERY</small>
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
@endsection

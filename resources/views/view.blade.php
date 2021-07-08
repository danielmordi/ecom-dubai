@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
<!-- Start Product Details -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 dealimgs">
                <div class="dealItem">
                    <div class="prodbox" style="position: relative;">
                        <div class="free-dev">Free Delivery</div>
                        <div id="countbox"></div>
                        <div class="pfimage">
                            <img src="{{ asset('uploads/'.$product->product_image) }}" id="mainimg">
                        </div>
                    </div>
                    <div class="text">
                        <div class="price">
                            <strong id="proprice">{{ $product->product_price }}</strong>
                            <span>140 AED</span>

                            <h3 class="prosold">{{ $product->product_sold }} Items Sold</h3>
                        </div>
                        <small class="pvat">AED {{ $product->product_stock_conut }} - VAT included</small>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30 prodcol">
                <div class="pdetailsi">
                    <div class="pro__detl__title">
                        <h2>Order Now</h2>
                        <p class="d-none d-xl-block d-lg-block">Kindly fill the form & we will deliver next day(AbuDhabi
                            2 days).</p>
                    </div>
                    <div class="pro__details">
                        <form method="POST" action="{{ route('order.store') }}" id="orderfrm">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label>Full Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Full Name*" id="names" required="required" value="{{ old('name') }}">
                                @error('name')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group fake-input">
                                <label>Mobile<span class="text-danger">*</span></label>
                                <input type="tel" class="form-control @error('tel_no') is-invalid @enderror"
                                    name="tel_no" id="mobile" required="required" value="{{ old('tel_no') }}">
                                <img src="https://www.brothers.ae/lib/img/AE.png" width="20">
                                <span class="code">+971</span>
                                @error('tel_no')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Quantity<span class="text-danger">*</span></label>
                                <select name="qty" class="form-control" required="required">
                                    @for ($i = 1; $i < 10; $i++) <option value="{{ $i }}">{{ $i }} -
                                        {{ (float) filter_var($product->product_price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) * $i }}
                                        AED</option>
                                        @endfor
                                </select>
                                @error('qty')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Emirates<span class="text-danger">*</span></label>
                                <select name="city" class="form-control @error('city') is-invalid @enderror"
                                    required="required">
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
                            <div class="form-group">
                                <label>Delivery Address<span class="text-danger">*</span></label>
                                <textarea style="min-height:70px !important"
                                    class="form-control materialize-textarea  @error('addr') is-invalid @enderror"
                                    name="addr" placeholder="Delivery Address* (Building No, Street name, Area)"
                                    required="required"></textarea>
                                @error('addr')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <button type="submit" id="btnfrmsubmit"
                                class="btn btn-success btn-submit btn-block btn-lg">SUBMIT ORDER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-sm-12">
                <div class="detailtxt">
                    <h3><strong>Description</strong></h3>
                    <hr />
                    <p>&nbsp;</p>

                    <p>{{ $product->product_description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Details -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <hr>
            <h2 class="otherp">Other Products</h2>
        </div>
    </div>
</div>

<section class="htc__product__area pb--50 bg__white">
    <div class="container">
        <div class="htc__product__container">
            <div class="row product__list">
                @foreach ($products as $product)
                <div class="col-md-4 col-sm-6 col-6 product filter cat-11">
                    <a href="{{ route('view', $product->slug) }}">
                        <div class="pgrid">
                            <div class="pimage">
                                <img data-src="{{ asset('uploads/'.$product->product_image) }}" class="lazy">
                                <span class="psold">{{ $product->product_sold }} Sold</span>
                                <div class="pfreed">Free Delivery</div>
                            </div>
                            <div class="pcontent">
                                <h3 class="title">{{ $product->product_name }}</h3>
                                <div class="price">
                                    {{ $product->product_price }}
                                    <span>{{ $product->discounted_price }}</span>
                                </div>
                                <div class="svat">{{ $product->product_stock_conut }} AED - VAT included</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script>
$(function () {
    $('.lazy').lazy();
});


$(function() {
    var arunauto = 1;
	$(".otherimg img").click(function(e) {
		$("#mainimg").attr("src", $(this).attr("src"));
		$(".otherimg  img").removeClass("active");
		$(this).addClass("active");
		arunauto = 0;
	});

	$("#mainimg").click(function(e) {
		arunauto = 0;
	});

	var count = 1;
	var Interval = 6000;
    setInterval(function() {
        if( arunauto )
        {
           var active = $(".otherimg .active").removeClass('active');
           if(active.next() && active.next().length){
                active.next().addClass('active');
            }
            else{
              active.siblings(":first").addClass('active');
            }
             $("#mainimg").attr("src", $(".otherimg .active").attr("src"));
        }
    }, Interval);
});
</script>
@endpush

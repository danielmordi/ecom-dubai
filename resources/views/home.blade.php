@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
@include('includes.menu')
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 col-sm-6 col-6 product filter {{ $product->categories[0]->slug }}">
        <a href="{{ route('view', $product->slug) }}">
            <div class="pgrid">
                <div class="pimage">
                    <img data-src="{{ asset('uploads/'.$product->product_image) }}" class="lazy">
                    <span class="psold">{{ $product->discounted_sold }} Sold</span>

                    <div class="pfreed">Free Delivery</div>
                </div>
                <div class="pcontent">
                    <h3 class="title">{{ $product->product_name }}</h3>
                    <div class="price">
                        {{ $product->product_price }}
                        <span>{{ $product->discounted_price }}</span>
                    </div>
                    <div class="svat">AED {{ $product->product_stock_conut }} - VAT included</div>

                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $(".filter-button").click(function () {
            var value = $(this).attr('data-filter');
            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');
            }

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });
    });

    $(function () {
        $('.lazy').lazy();
    });

</script>
@endpush

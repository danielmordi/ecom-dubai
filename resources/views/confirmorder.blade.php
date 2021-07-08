@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
<div class="container mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <a href="{{ url('/') }}" class="btn btn-success btn-submit btn-block">
                Continue Shopping &raquo;
            </a>
        </div>

        <div class="">
            <br>
            <br>
            <div class="invoice">
                <h2 style="font-size:18px;">Your order Confirmed!</h2>
                <span class="font-weight-bold d-block mt-4">Hello, {{ $order->customer_name }}</span>
                <span>You order has been confirmed and will be shipped in next two working days!</span>
                <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Order Date</span>
                                        <span>{{ $order->created_at->format('d M, Y') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Order No</span>
                                        @if ($order->id < 10)
                                        <span>800{{ $order->id }}</span>
                                        @else
                                        <span>80{{ $order->id }}</span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Payment</span>
                                        <span>Cash on Delivery</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Shiping Address</span>
                                        <span>{{ $order->customer_address }}, {{ $order->customer_city }}</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="product border-bottom table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20%">
                                    <img style="height:90px;"
                                        src="{{ asset('uploads/'.$order->product->product_image) }}" alt="" />
                                </td>
                                <td width="60%">
                                    <span class="font-weight-bold">{{ $order->product->product_name }} </span>
                                    <div class="product-qty">
                                        <span class="d-block">Quantity: <span>{{ $order->order_quantity }}</span></span>
                                    </div>
                                </td>
                                <td width="20%">
                                    <div class="text-right">
                                        <span class="font-weight-bold"></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-md-5">
                        <table class="table table-borderless">
                            <tbody class="totals">
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <span class="text-muted">Subtotal</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span>{{ $order->product->product_price }}</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <span class="text-uted">Shipping Fee</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span class="text-success">Free</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <span class="text-muted">VAT</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span>AED {{ $order->product->product_stock_conut }}</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-top border-bottom">
                                    <td>
                                        <div class="text-left">
                                            <span class="font-weight-bold">Grand Total</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span class="font-weight-bold">{{ $order->total_amount }}</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="font-weight-bold text-center mb-0">Thanks for shopping with us!</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script>
$(function () {
    $('.lazy').lazy();
});

</script>
@endpush

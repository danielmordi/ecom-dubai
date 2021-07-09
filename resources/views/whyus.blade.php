@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p>Brothers is your onestop online shop for classy watches, cool gadgets, smart devices and the swankiest
                gifts across the UAE. All products across our site are quality and price guranteed and sourced from
                authorised sellers or even directly from manufacturers to ensure their authenticity.&nbsp;</p>

            <p>We pride ourselves offiering the best prices and while you may not find everything on our website. You
                can be sure, that whatever you do will be at the best prices possible.</p>

            <p><strong>All orders are shipped from the UAE</strong></p>

            <p>&nbsp;</p>

            <p>If you need your parcel delivered on a certain day our Customer Services team will arrange this for you
                at no extra charge.</p>

            <p>&nbsp;</p>

            <p><strong>100% genuine products</strong><br />
                Every item sold by GiftNation&nbsp;is a 100% genuine item supplied to us directly from the manufacturer.
            </p>

            <p><strong>Price Promise</strong><br />
                We stand by our lowest price promise.</p>

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

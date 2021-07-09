@extends('layouts.app')
@section('title')
{{ config('APP_NAME') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 class="ptitle mb-4 pb-3 pt-2 border-bottom box-shadow">About Us</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Finding the bargain of a lifetime while shopping online is quite commonplace with whole sellers and 3d
                party retailers selling products without any aussurance of source or authenticity.</p>
            <p>brothers.ae brings the value of outlet shopping to the convenience of e-commerce, while ensuring that
                every product you purchase is genuine and directly from sellers that manufacture them.</p>
            <p>&nbsp;</p>
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

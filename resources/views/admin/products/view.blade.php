@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-uppercase">{{ $product->product_name }}</h4>
            <button class="btn btn-primary btn-sm float-right">
                <a href="{{ route('product.edit', $product->id) }}" class="text-white">Edit product</a>
            </button>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('uploads/'.$product->product_image) }}" class="rounded mx-auto mb-2 d-block" alt="" width="250">
                </div>
                <div class="col-md-8 px-2">
                    <p class="text-uppercase">Product Details</p>
                    <table class="table table-striped">
                        <thead>
                            <th width="100"></th>
                            <th></th>
                        </thead>
                        <tr>
                            <td>Name</td>
                            <td>{{ $product->product_name }}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{ $product->product_price }}</td>
                        </tr>
                        <tr>
                            <td>Discount price</td>
                            <td>{{ $product->discounted_price }}</td>
                        </tr>
                        <tr>
                            <td>Product sold</td>
                            <td>{{ $product->product_sold }}</td>
                        </tr>
                        <tr>
                            <td>In stock</td>
                            <td>{{ $product->product_stock_conut }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $product->product_description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-uppercase">All products</h4>
            <button class="btn btn-primary btn-xs float-right">
                <a href="{{ route('product.add') }}" class="text-white">Add product</a>
            </button>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table id="example4" class="display table-counter table-striped" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Old Price</th>
                            <th>Qty</th>
                            <th>Sold Qty</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td></td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->discounted_price }}</td>
                            <td>{{ $product->product_stock_conut }}</td>
                            <td>{{ $product->product_sold }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>
                                <div class="dropdown custom-dropdown show">
                                    <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                     style="position: absolute; transform: translate3d(-120px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <form action="{{ route('product.delete', $product->id) }}" method="post">
                                            <a class="dropdown-item" href="{{ route('product.view', $product->id) }}">View</a>
                                            <a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">Edit</a>
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn-link dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


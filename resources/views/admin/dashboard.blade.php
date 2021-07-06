@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card shadow shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Sales</h4>
                        <h3>AED {{ $total_sales }}</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card shadow shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Orders</h4>
                        <h3>{{ count($t_order) }}</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card shadow shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Products</h4>
                        <h3>{{ count($products) }}</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <h2 class="display-6">Recent Orders</h2>
            <hr>
            <table class="table table-counter table-striped">
                <thead class="bg-dark text-white">
                <th>SN</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Cus_Name</th>
                <th>Cus_Phone_no</th>
                <th>Cus_address</th>
                <th>Total</th>
                <th>Status</th>
                <th>Ordered on</th>
                </thead>
                <tbody>
                @foreach($orders as $order)
{{--                    @foreach($order->products as $product)--}}
{{--                        @dd($product)--}}
{{--                    @endforeach--}}
                    <tr data-href="{{ route('orders.view', $order->id) }}">
                        <td></td>
                        <td>{{ $order->products[0]->product_name ?? false }}</td>
                        <td>{{ $order->order_quantity }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->customer_tel_no }}</td>
                        <td width="300">{{ $order->customer_address }} Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        <td>{{ $order->total_amount }}</td>
                        <td>
                            <span class="badge text-white badge-lg bg-{{ $order->is_delivered == false ? 'warning' : 'success' }}">
                                {{ $order->is_delivered == false ? 'Not yet delivered!' : 'Delivered!' }}
                            </span>
                        </td>
                        <td>{{ $order->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination pagination-gutter pagination-primary no-bg">
                {!! $orders->links("pagination::bootstrap-4") !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function($) {
            $('[data-href]').css('cursor', 'pointer');
            $('*[data-href]').on('click', function() {
                window.location = $(this).data("href");
            });
        });
    </script>
@stop

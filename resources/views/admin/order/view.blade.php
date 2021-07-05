@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase">{{ $order->products[0]->product_name }}</h4>
            </div>
            <div class="card-body">
                <h3>Order Details</h3>
                <div class="col-md-5 col-sm-12 p-0">
                    <table class="table table-borderless table-striped">
                        <tr>
                            <td>Name</td>
                            <td>{{ $order->customer_name }}</td>
                        </tr>
                        <tr>
                            <td>Phone no.</td>
                            <td>{{ $order->customer_tel_no }}</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>{{ $order->customer_city }}</td>
                        </tr><tr>
                            <td>Address</td>
                            <td>{{ $order->customer_address }}</td>
                        </tr><tr>
                            <td>Status</td>
                            <td class="text-{{ $order->is_delivered == false ? 'danger' : 'success' }}">
                                {{ $order->is_delivered == false ? 'Not delivered' : 'Delivered' }}
                            </td>
                        </tr><tr>
                            <td>Ordered on</td>
                            <td>{{ $order->created_at->format('d-M-Y') }}</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="table-responsive mb-2">
                    <h3>Order Summary</h3>
                    <table class="table">
                        <thead>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Time Ordered</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->products[0]->product_name }}</td>
                                <td>{{ $order->order_quantity }}</td>
                                <td>{{ $order->products[0]->product_price }}</td>
                                <td>
                                    <p class="badge badge-{{ $order->is_delivered == false ? 'warning' : 'success' }}">
                                        {{ $order->is_delivered == false ? 'Not yet delivered' : 'Delivered' }}
                                    </p>
                                </td>
                                <td>{{ $order->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr class="bg-dark-alt font-weight-bold">
                                <td colspan="2" class="text-uppercase">Total</td>
                                <td>{{ $order->total_amount }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-2">
                    <a href="{{ route('orders.delivered', $order->id) }}" class="btn btn-success btn-square">Mark as: delivered</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready( function () {
        @if (session()->has('success'))
        toastr.success('{{ session('success') }}')
        @endif
    });
</script>
@endsection



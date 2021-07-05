@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase">All Orders</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table id="" class="table-counter table table-striped" style="min-width: 845px">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Phone no.</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td></td>
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->customer_tel_no }}</td>
                                <td>{{ $order->customer_city }}</td>
                                <td>{{ $order->customer_address }}</td>
                                <td class="bg-{{ $order->is_delivered == false ? 'warning' : 'success' }}">
                                    {{ $order->is_delivered == false ? 'Not yet delivered' : 'Delivered' }}
                                </td>
                                <td class="text-right">
                                    <form action="{{ route('category.delete', $order->id) }}" method="post">
                                        <a href="{{ route('orders.view', $order->id) }}" class="btn-link">view order</a>
                                        @csrf @method('DELETE')
                                        <button type="submit" class="ml-2 btn btn-link text-danger sweet-confirm-category-delete">Delete</button>
                                    </form>
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

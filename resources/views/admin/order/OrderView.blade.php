@extends('admin.layouts.master')
@section('title')
    {{'Order View'}}
@endsection

@section('content')
<div class="row">
    <div class="col-7">

        <div class="card mb-md-0 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Customer Billing Info</h4>
                        <ul style="list-style-type:none;">
                            @foreach($orders as $order)
                                <li>Name:  {{$order->customer->name}}</li>
                                <li>Phone: {{$order->customer->phone}} </li>
                                <li>Email: {{$order->customer->email}}</li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="col-md-6">
                        <h4 class="card-title">Shipping Info</h4>
                        <ul style="list-style-type:none;">
                            @foreach($orders as $order)
                                <li>Name:  {{$order->customer->name}}</li>
                                <li>Phone: {{$order->customer->phone}} </li>
                                <li>Email: {{$order->customer->email}}</li>
                                <li>Email: {{$order->shipping_address}}</li>
                            @endforeach
                        </ul>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Payment Info</h4>
                        <ul style="list-style-type:none;">
                            @foreach($orders as $order )
                                <li>Payment Type: {{$order->payment_type}}</li>
                                <li>Total Bill : {{$order->subtotal}} </li>
                                <li>Payment Status: Cash On </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title">Product Details</h4>
                        <table class="table table-responsive table-centered mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name </th>
                                <th>Weight</th>
                                <th>Details</th>
                                <th>Price </th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderDetails as $orderDetail)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$orderDetail->product->title}}</td>
                                    <td>{{$orderDetail->variation->weight}}</td>
                                    <td>Quantity: {{$orderDetail->quantity}}</td>
                                    <td>{{$orderDetail->unit_price}}</td>
                                    <td>{{$orderDetail->unit_price * $orderDetail->quantity }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="row mt-2" >
                    <h4 class="card-title">Order Info</h4>
                    <div class="col-md-6">
                        <ul style="list-style-type:none;">
                            <li>Subtotal:</li>
                            <li>Shipping Charge:  </li>
                            <li>Grand Total:   </li>
                        </ul>
                    </div>
                    <div class="col-md-6 float-right">
                        <ul style="list-style-type:none;">
                            @foreach($orders as $order)
                                <li>{{$order->subtotal - $shippingCharge->amount}} </li>
                                <li>{{$shippingCharge->amount}}</li>
                                <li>{{$order->subtotal}}  </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div>
                </div>

            </div>

        </div>

    </div>
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                @foreach($orders as $order)
                <h3 class="card-title">Order Confirmation</h3>
                <form action="{{route('Order.Status.Change', $order->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <select name="status" class="form-select  form-select-md mb-3">
                            <option value="Pending" @if($orders->first()->status == 'Pending') selected @endif>Pending</option>
                            <option value="Approved" @if($orders->first()->status == 'Approved') selected @endif>Approved</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @endforeach

            </div>
        </div>
    </div>

</div>
@endsection

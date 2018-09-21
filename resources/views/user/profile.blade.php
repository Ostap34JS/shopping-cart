@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>User Profile</h1>
        </div>
    </div>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $product['item']['title'] }}</strong>
                                <span class="badge badge-success">{{ $product['price'] }} $</span>
                                <div class="btn-group">
                                    <a href="{{ route('product.deleteFromCart', ['id' => $product['item']['id']]) }}" class="btn btn-primary btn-sm">Delete</a>
                                </div>
                            </div>
                            <span class="badge badge-primary badge-pill">{{ $product['qty'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <strong>Total: {{$totalPrice}} $</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <button class="btn btn-success btn-block">Checkout</button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <h2>No items in cart!</h2>
            </div>
        </div>
    @endif
@endsection

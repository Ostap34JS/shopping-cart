@extends('layouts.master')

@section('title')
    {{$product->title}}
@endsection

@section('content')
        <div class="clearfix"></div>
        <div class="container marginer">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-10 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#">
                  <img class="card-img-top" src="{{$product->imagePath}}" alt="">
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$product->title}}</a>
                  </h4>
                  <h5>${{$product->price}}</h5>
                  <p class="card-text">{{ str_limit($product->description,140)}}</p>
                </div>
                <div class="card-footer">
                  <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success btn-block">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

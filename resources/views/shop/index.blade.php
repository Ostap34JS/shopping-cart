@extends('layouts.master')

@section('title')
    Laravel shopping cart
@endsection

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-lg-4 col-md-6 mb-4">
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
            @endforeach
        </div>
    @endforeach
@endsection

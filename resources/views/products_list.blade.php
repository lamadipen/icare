@extends('layouts.frontend')

@section('product')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('productdetail')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-breadcroumb">
                        
                        
                        
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="related-products-carousel"> 
            
                @foreach($products as $product)           
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{ asset('public/img/')}}/{{ $product->product_picture['0']['filename_thumb'] }}" alt="">
                        <div class="product-hover">
                                <a href="{{ url('product') }}/{{ $product->id }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">{{ $product->title }}</a></h2>

                    <div class="product-carousel-price">

                        <ins>Nrs. 700.00</ins>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination col-md-12"> {!! $products->render() !!}</div>
                
                
            </div>
        </div>
    </div>
@endsection

@section('relatedproducts')
    <div class="related-products-wrapper">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <h2 class="related-products-title">Related Products</h2>
            <div class="related-products-carousel">
                @foreach($featured_products as $product)  
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ url('public/productimages')}}/{{$product->filename_thumb }}" alt="">
                                    <div class="product-hover">

                                        <a href="{{ url('product') }}/{{ $product->id }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html"> {{ $product->title }} </a></h2>

                                <div class="product-carousel-price">
                                    <ins>Nrs. {{ $product->price }}</ins>
                                </div>
                            </div>
                        @endforeach 
                
                
               
            </div>
        </div>
    </div>
@endsection


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
                        <a href="">Home</a>
                        <a href="">Category Name</a>
                        <a href=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="related-products-carousel"> 
            
                @foreach($products as $product) 
                {{ $product->product_picture }}          
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{ asset('/img/product-1.jpg ') }}" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href=""></a></h2>

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
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="/img/product-1.jpg" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">Product 1</a></h2>

                    <div class="product-carousel-price">
                        <ins>Nrs. 700.00</ins>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="/img/product-2.jpg" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">Product 1</a></h2>
                    <div class="product-carousel-price">
                        <ins>Nrs. 899.00</ins>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="/img/product-3.jpg" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">Product 1</a></h2>

                    <div class="product-carousel-price">
                        <ins>Nrs. 400.00</ins>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="/img/product-4.jpg" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">Product 1</a></h2>

                    <div class="product-carousel-price">
                        <ins>Nrs. 200.00</ins>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="/img/product-5.jpg" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">Product 1</a></h2>

                    <div class="product-carousel-price">
                        <ins>Nrs. 1200.00</ins>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="/img/product-6.jpg" alt="">
                        <div class="product-hover">
                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="">Product 1</a></h2>

                    <div class="product-carousel-price">
                        <ins>Nrs. 400.00</ins>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footercategorymenu')
    <div class="footer-menu">
        <h2 class="footer-wid-title">Categories</h2>
        <ul>
            <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <li><a href="#">Category 4</a></li>
            <li><a href="#">Category 5</a></li>
        </ul>
    </div>
@endsection
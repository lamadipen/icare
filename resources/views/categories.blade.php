
@extends('layouts.frontend')

@section('product')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Categories</h2>
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
                        <a href="">{{$cat_title->title or 'no title'}}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                
                            <div class="col-sm-7">
                             
                                
                                    @foreach ($categories as $category)

                                    <div class="col-sm-4">
                                    
                                    <div class="single-product" >


                                        <div class="product-f-image" style="">





                                            
                                                    <img src="{{ url('public/productimages')}}/{{$category->filename_thumb }}" width="100%" alt=""/>
                                                    
                                                    <div class="product-hover">
                                                        <a href="{{ url('product') }}/{{ $category->id }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                            
                                        </div>

                                        <h2><a href="">{{ $category->title }}</a></h2>

                                        <div class="product-carousel-price">

                                                <ins>NRS {{ $category->price}}</ins>
                                                <br>
                                                <br>

                                        </div>
                                    </div>

                                    </div>
                                   
                                    

                                    @endforeach
                                
                            </div>
                        
                       
                    
                <div class="col-md-4">
                    <div role="tabpanel" class="" id="profile">
                        <h2 class="product-name">Inquire</h2>
                        <div class="submit-review">
                            <p><label for="name">Name</label> <input name="name" type="text" placeholder="Type your name"></p>
                            <p><label for="email">Email</label> <input name="email" type="email" placeholder="Type your email"></p>
                            <p><label for="review">Inquiry</label> <textarea name="inquiry" id="" cols="30" rows="10" placeholder="Type your inquiry"></textarea></p>
                            <p><input type="submit" value="Submit"></p>
                        </div>
                    </div>
                </div>
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


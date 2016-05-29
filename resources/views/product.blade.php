@extends('layouts.frontend')

@section('product')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{ $product->title }}</h2>
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
                        <a href="">{{ $product->title or 'no title'}}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{ url('')}}/public/productimages/{{ $defaultproductpicture->filename_mid }}" alt="">
                                    </div>

                                    <div class="product-gallery">
                                    @foreach ($productpictures as $productpicture)
                                        <img src="{{ url('') }}/{{'public/productimages/' . $productpicture->filename_thumb }}" alt="">
                                    @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="">{{ $product->title or 'no title'}}</h2>
                                    <div class="product-inner-price">
                                        <ins>NRs. {{ $product->price or 'no price'}}</ins>
                                    </div>

                                    <div>
                                        <h2 class="product-name">Specification</h2>
                                        <p><span>Weight</span> {{ $product->weight or 'no weight' }}gms</p>
                                    </div>

                                    <div>
                                        <h2 class="product-name">Description</h2>
                                        {!! $product->description or 'no description' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div role="tabpanel" class="" id="profile">
                        <h2 class="product-name">Inquire</h2>
                        <div class="submit-review">
                            <form action="{{url('inquiry')}}" method="post">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="productid" value="{{ $product->id }}"></input>
                                <p><label for="name">Name</label> <input name="name" type="text" placeholder="Type your name"></p>
                                <p><label for="email">Email</label> <input name="email" type="email" placeholder="Type your email"></p>
                                <p><label for="review">Inquiry</label> <textarea name="description" id="" cols="30" rows="10"  placeholder="Type your inquiry"></textarea></p>
                                <p><input type="submit" value="Submit"></p>
                            </form>
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
                @foreach($prod_features as $product)  
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


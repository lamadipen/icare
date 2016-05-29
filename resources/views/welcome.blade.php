@extends('layouts.frontend')


@section('homepageslider')
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">

            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url(productimages/1.jpg)"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are awesome</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url(public/productimages/2.jpg)"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are great</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aspernatur, dolorum harum molestias tempora deserunt voluptas possimus quos eveniet, vitae voluptatem accusantium atque deleniti inventore. Enim quam placeat expedita! Quibusdam!</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url(productimages/3.jpg)"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are superb</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptates necessitatibus dicta recusandae quae amet nobis sapiente explicabo voluptatibus rerum nihil quas saepe, tempore error odio quam obcaecati suscipit sequi.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- End slider area -->
@endsection

@section('promoarea')
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
@endsection

<!--featured products display -->
@section('featuredproducts')
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Featured Products</h2>
                        <div class="product-carousel">

                         @foreach($products as $product)  
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ url('public/productimages')}}/{{$product->filename_thumb }}" alt="">
                                    <div class="product-hover">

                                        <a href="{{ url('product') }}/{{ $product->id }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{ url('product') }}/{{ $product->id }}"> {{ $product->title }} </a></h2>

                                <div class="product-carousel-price">
                                    <ins>Nrs{{ $product->price }}</ins>
                                </div>
                            </div>
                        @endforeach 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
@endsection

@section('categories')
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Categories</h2>
                        <div class="brand-list">
                            <img src="public/img/services_logo__1.jpg" alt="">
                            <img src="public/img/services_logo__2.jpg" alt="">
                            <img src="public/img/services_logo__3.jpg" alt="">
                            <img src="public/img/services_logo__4.jpg" alt="">
                            <img src="public/img/services_logo__1.jpg" alt="">
                            <img src="public/img/services_logo__2.jpg" alt="">
                            <img src="public/img/services_logo__3.jpg" alt="">
                            <img src="public/img/services_logo__4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
@endsection

@section('productwidgetarea')
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, est a condimentum porttitor, enim leo facilisis nulla, et rhoncus eros ante id odio. Curabitur laoreet aliquet faucibus. In hac habitasse platea dictumst. Vestibulum rutrum accumsan aliquam. Duis eleifend dapibus quam ut posuere. In in vehicula dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec dignissim ligula in leo iaculis congue. Nulla facilisi. Fusce ornare quis quam eget eleifend. Nunc in est tincidunt, tristique augue in, feugiat urna. Suspendisse porttitor sed enim et faucibus. Integer nec felis rutrum, dignissim purus eu, placerat sapien.</p>
        </div>
    </div> <!-- End product widget area -->
@endsection


 
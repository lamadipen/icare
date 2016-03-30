<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCareComfort - {{ isset($title) ? $title : 'Home' }}</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
      <link href="{{ asset('public/css/owl.carousel.css') }}" rel="stylesheet">
      <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="/">i<span>CareComfort</span></a></h1>
                    </div>
                </div>
                <!--
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <form action="" method="POST">
                            <input type="text" placeholder="Search Text Here" />
                            <input type="submit" value="search" />
                        </form>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li><a href="{{ url('/fpage/1')}}">About Us</a></li>
                        <li><a href="{{ url('product')}}">Products</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    @yield('pagecontent')

    @yield('product')

    @yield('homepageslider')

    @yield('promoarea')

    @yield('productdetail')

    @yield('relatedproducts')

    @yield('featuredproducts')

    @yield('categories')

    @yield('productwidgetarea')

    @yield('contact')
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>i<span>CareComfort</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/spicatechnologies/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/fpage/1')}}">About Us</a></li>
                            <li><a href="{{ url('product')}}">Products</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    @yield('footercategorymenu')
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">General Inquiry</h2>
                        <div class="newsletter-form">
                            <form action="{{url('inquiry')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="productid" value="0">
                                <input type="text" name="name" placeholder="Type your name">
                                <input type="email" name="email" placeholder="Type your email">
                                <input type="text" name="phoneno" placeholder="Type your phoneno">
                                <textarea name="description" placeholder="Type your inquiry"></textarea>
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>&copy; 2015 eElectronics. All Rights Reserved. </p>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.sticky.js') }}"></script>
    
    <!-- jQuery easing -->
    <script src="{{ asset('public/js/jquery.easing.1.3.min.js') }}"></script>
    
    <!-- Main Script -->
    <script src="{{ asset('public/js/main.js') }}"></script>
  </body>
</html>
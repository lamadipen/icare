@extends('layouts.frontend', ['title' => $title])

@section('contact')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contactus">
                        <address>
                            <h2>iCareComfort</h2>
                            <p>Mandikatar, Kathmandu</p>
                            <p><a href="tel:+977-1-737474">+977-1-737474</a></p>
                        </address>
                        <form action="#">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-group icare-input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control contactformcontrol" placeholder="Full name" id="inputIcon" required="required" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-group icare-input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input class="form-control contactformcontrol" placeholder="Your Email" id="inputIcon" required="required" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-group icare-input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-phone lyphicon-sm"></i></span>
                                        <input class="form-control contactformcontrol" placeholder="Telephone" id="inputIcon" type="tel">
                                    </div>
                                </div>
                            </div>
                            <textarea name="message" placeholder="Type your inquiry" height="50"></textarea>
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contactus">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="700" height="500" src="https://maps.google.com/maps?hl=en&q=27.737653, 85.354025&ie=UTF8&t=roadmap&z=16&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buy proxies</a></small></div></iframe>
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
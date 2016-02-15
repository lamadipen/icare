@extends('layouts.frontend', ['title' => $page->title])

@section('pagecontent')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$page->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        {!! $page->description !!}
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
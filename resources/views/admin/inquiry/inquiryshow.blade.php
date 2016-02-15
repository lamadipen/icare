@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <h2>{{ $inquiry->name }}</h2>
                        </div>
                        <div class="col-md-8">
                            {{ $inquiry->email }}
                        </div>
                        <div class="col-md-8">
                            {{ $inquiry->productid }}
                        </div>
                        <div class="col-md-8">
                            {{ $inquiry->description }}
                        </div>

                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
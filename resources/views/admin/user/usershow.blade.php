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

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    {{ $user->name }}
                                </div>
                            </div>

                            <div class="form-group clear    ">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    {{ $user->email }}
                                </div>
                            </div>

                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
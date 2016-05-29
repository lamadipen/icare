@extends('layouts.admin')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit User
                    </div>
                    <div class="panel-body">
                        {!! \Illuminate\Html\FormFacade::open(['method' => 'PATCH', 'route' => ['admin.user.update', $user->id]]) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user['name'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user['email'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! \Illuminate\Html\FormFacade::submit('Update', ['class' => 'btn btn-primary', 'name' => 'submit']) !!}
                            </div>
                        </div>


                        {!! \Illuminate\Html\FormFacade::close() !!}

                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
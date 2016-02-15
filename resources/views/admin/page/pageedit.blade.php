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
                        Edit Page
                    </div>
                    <div class="panel-body">
                        {!! \Illuminate\Html\FormFacade::open(['method' => 'PATCH', 'route' => ['admin.page.update', $page->id]]) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $page['title'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control ckeditor" name="description">{{ $page['description'] }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="slug">Description</label>
                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ $page['slug'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! \Illuminate\Html\FormFacade::submit('Register', ['class' => 'btn btn-primary', 'name' => 'submit']) !!}
                            </div>
                        </div>


                        {!! \Illuminate\Html\FormFacade::close() !!}

                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
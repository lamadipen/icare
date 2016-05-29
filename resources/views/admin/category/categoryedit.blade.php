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
                        Edit Category
                    </div>
                    <div class="panel-body">
                        {!! \Illuminate\Html\FormFacade::open(['method' => 'PATCH', 'route' => ['admin.category.update', $category->id]]) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $category['title'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control ckeditor" name="description">{{ $category['description'] }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="parentid">Parent Category</label>
                            <div class="col-md-6">
                                <select id="parentid" name="parentid">
                                    <option value="0" @if($category['parentid']==0) selected @endif>Select Parent</option>
                                    @foreach($categories as $cat_value)
                                        <option value="{{ $cat_value['id'] }}" @if($category['parentid']==$cat_value['id']) selected @endif>{{ $cat_value['title'] }}</option>
                                    @endforeach
                                </select>
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
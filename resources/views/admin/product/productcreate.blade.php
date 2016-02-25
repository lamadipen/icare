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
                        Create New Product
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/product') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Slug</label>
                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control" name="slug" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="parentid">Category</label>
                                <div class="col-md-6">
                                    <select id="category_id" name="category_id" class="form-control" >
                                        <option value="0">Select Parent</option>
                                         @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Weight</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="weight" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Price</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="price" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control ckeditor" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button id="submit" name="submit" type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/product') }}" enctype="multipart/form-data" >
                    
                    <!-- first form section start-->
                    <div class="panel-body col-lg-6">                        
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
                                        Create
                                    </button>
                                </div>
                            </div>                
                    </div>
                    <!-- first form section end-->
                    <!-- second form section start-->
                    <div class="panel-body col-lg-6">                                                                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Thumbnail</label>
                                <div class="col-md-6">
                                    {!! \Illuminate\Html\FormFacade::file('thumb') !!}
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Medium Image</label>
                                <div class="col-md-6">
                                    {!! \Illuminate\Html\FormFacade::file('mid') !!}
                                </div>
                            </div>                                                                 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Big Image</label>
                                <div class="col-md-6">
                                    {!! \Illuminate\Html\FormFacade::file('big') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Caption</label>
                                <div class="col-md-6">
                                    <input id="caption" type="text" class="form-control" name="caption" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Order</label>
                                <div class="col-md-6">
                                    <input id="order" type="text" class="form-control" name="order" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Default</label>
                                <div class="col-md-6">
                                    <label>Yes</label>
                                    {!!  Form::radio('is_default', 'true', false); !!}
                                    <label>No</label>
                                    {!!  Form::radio('is_default', 'false', true); !!}
                                 </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Featured</label>
                                <div class="col-md-6">
                                    <label>Yes</label>
                                    {!!  Form::radio('featured', '1', 0); !!}
                                    <label>No</label>
                                    {!!  Form::radio('featured', '0', 1); !!}
                                 </div>
                            </div>                                                        
                    </div>
                    <!-- second form section end-->
                    </form>
                 </div>
            </div>
            
            
            
        </div>
    </div>
@endsection
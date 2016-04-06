
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
                        Edit Product
                    </div>
                    <div class="panel-body">
                        {!! \Illuminate\Html\FormFacade::open(['method' => 'PATCH', 'route' => ['admin.product.update', $product->id]]) !!}
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $product['title'] }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Slug</label>
                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ $product['slug'] }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="parentid">Category</label>
                                <div class="col-md-6">
                                    <select id="category_id" name="category_id" class="form-control" >
                                        <option value="0">Select Caltgory</option>
                                         @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}"  @if($product['cat_id']==$category['id']) selected @endif >{{ $category['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Weight</label>
                                <div class="col-md-6">
                                    <input id="weight" type="text" class="form-control" name="weight" value="{{ $product['weight'] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Price</label>
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="price" value="{{ $product['price'] }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control ckeditor" name="description">{{ $product['description'] }}</textarea>
                                </div>
                            </div>
                            <br>

                            <!--the edit for the featured item -->
                             <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Featured</label>


                                <div class="col-md-6">
                                    
                                    
                                    @if ($product['featured'] === 1)
                                        <label>Yes</label>
                                        {!!  Form::radio('featured', '1', 1); !!}
                                        <label>No</label>
                                        {!!  Form::radio('featured', '0', 0); !!}
                                
                                    @else
                                        <label>Yes</label>
                                        {!!  Form::radio('featured', '1', 0); !!}
                                        <label>No</label>
                                        {!!  Form::radio('featured', '0', 1); !!}
                                 
                                        
                                    @endif

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

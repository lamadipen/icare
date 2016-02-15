@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List of Categories
                    </div>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-9">
                                        {!! link_to_route('admin.category.create', $title = "Create New Category", $parameters = array(), array('class' => 'btn btn-default')) !!}
                                    </div>
                                    <div class="col-sm-3">
                                        <div id="dataTables-example_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"><div class="col-sm-12">
                                        <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 177px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 199px;" aria-label="Browser: activate to sort column ascending">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($categories as $category)
                                                <tr class="gradeA odd" role="row">
                                                    <td class="sorting_1">{{ $category['title'] }}</td>
                                                    <td>
                                                        {!! \Illuminate\Html\FormFacade::open(['method' => 'DELETE', 'route' => ['admin.category.destroy', $category['id']]]) !!}
                                                        <a id="" class="btn btn-default navbar-btn" href="{{ url('admin/category/'.$category['id']) }}">show</a>
                                                        <a id="{{ $category['id'] }}" class="btn btn-default navbar-btn" href="{{ url('admin/category/'.$category['id'].'/edit') }}">edit</a>
                                                        {!! \Illuminate\Html\FormFacade::submit('delete', ['class' => 'btn btn-danger', 'name' => 'delete_'.$category['id']]) !!}
                                                        {!! \Illuminate\Html\FormFacade::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="dataTables_length" id="dataTables-example_length">
                                            <label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                                                <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                                                <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
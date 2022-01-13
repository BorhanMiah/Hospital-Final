@extends('backend.master')

@section('content')

<section class="section">
                    <div class="card">
                        <div class="card-header">
                            Department List
                        </div>
                
                        <div class="card-body">
                        <div class="dataTable-top"><div class="dataTable-dropdown"></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div><br><a href={{route('admin.department.create')}} class="btn btn-info">Add Department</a></div>
                        <br>
                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            {{-- <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                            <div class="dataTable-dropdown">
                            <select class="dataTable-selector form-select">
                            <option value="5">5</option>
                            <option value="10" selected="">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            </select>
                            <label>entries per page</label>
                            </div>
                            <div class="dataTable-search">
                            <input class="dataTable-input" placeholder="Search..." type="text">
                            </div>
                            </div> --}}
                            <div class="dataTable-container">
                            <table class="table table-striped dataTable-table" id="table1">
                                <thead>
                                    <tr>
                                        <th style="width: 31.1523%;">#</th>
                                        <th style="width: 31.1523%;">Department Name</th>
                                        <th style="width: 31.1523%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($departments as $key => $department)
                                    <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        <a href={{route('admin.department.edit', $department->id)}} class="btn btn-success round">Edit</a>
                                        <a href={{route('admin.department.delete', $department->id)}} class="btn btn-danger round">Delete</a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 26 entries</div><ul class="pagination pagination-primary float-end dataTable-pagination"><li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li><li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li><li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li><li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li><li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li></ul></div></div>
                        </div>
                    </div>

                </section>
@endsection
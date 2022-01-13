@extends('backend.master')

@section('content')

<section class="section">
                    <div class="card">
                        <div class="card-header">
                            Doctor List
                        </div>
                
                        <div class="card-body">
                        <div class="dataTable-top"><div class="dataTable-dropdown"></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div><br><a href={{route('doctor.create')}} class="btn btn-info">Add Doctor</a></div>
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
                                        <th >#</th>
                                        <th >Name</th>
                                        <th >Mobile</th>
                                        <th >Department</th>
                                        <th >Room</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($doctors as $key => $doctor)
                                    <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->mobile }}</td>
                                    <td>{{ $doctor->department->name }}</td>
                                    <td>
                                    @foreach ($doctor->rooms as $room)
                                    {{ $room->room_no }},
                                    @endforeach
                                    </td>
                                    <td>
                                        <a href={{route('doctor.show', $doctor->id)}} class="btn btn-primary round">Details</a>
                                        <a href={{route('doctor.edit', $doctor->id)}} class="btn btn-success round">Edit</a>
                                        <a href={{route('doctor.delete', $doctor->id)}} class="btn btn-danger round">Delete</a>
                                    </td>
                                    </tr>
                                @endforeach
                       
                            </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 26 entries</div><ul class="pagination pagination-primary float-end dataTable-pagination"><li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li><li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li><li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li><li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li><li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li></ul></div></div></tbody>
                        </div>
                    </div>

                </section>
@endsection
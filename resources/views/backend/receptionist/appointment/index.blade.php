@extends('backend.master')

@section('content')

<section class="section">
                    <div class="card">
                        <div class="card-header">
                            Appointment List
                        </div>
                
                        <form action="{{route('appointment.search')}}" method="GET">
    <div class="form-group">
        {{-- <label for="exampleInputEmail1">Email address</label> --}}
        <input name="search" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
                                        <th style="width: 1%;">#</th>
                                        <th style="width: 1%;">Name</th>
                                        <th style="width: 1%;">Mobile</th>
                                        <th style="width: 1%;">Email</th>
                                        <th style="width: 1%;">Status</th>
                                        <th style="width: 1%;">Department</th>
                                        <th style="width: 1%;">Doctor</th>
                                        <th style="width: 1%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($appointments as $key => $appointment)
                                    <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ $appointment->mobile }}</td>
                                    <td>{{ $appointment->email }}</td>
                                    <td>
                                        
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-{{ ($appointment->status == 1 ) ? 'success' : 'danger' }} round dropdown-toggle me-1 show" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    {{($appointment->status == 1 ) ? 'Active' : 'Deactive'}}
                                                </button>
                                                <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton2" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 39px);">
                                                      <a class="dropdown-item" href="{{route('appointment.status1', $appointment->id)}}">Active</a>
                                                      <a class="dropdown-item" href="{{route('appointment.status2', $appointment->id)}}">Deactive</a>
                                                </div> 
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $appointment->department->name }}</td>
                                    <td>{{ $appointment->doctor->name }}</td>
                                    <td>
                                        <a href="{{route('appointment.edit', $appointment->id)}}" class="btn btn-success round">Edit</a>
                                        <a href="{{route('appointment.delete', $appointment->id)}}" class="btn btn-danger round">Delete</a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 26 entries</div><ul class="pagination pagination-primary float-end dataTable-pagination"><li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li><li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li><li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li><li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li><li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li></ul></div></div>
                        </div>
                    </div>

                </section>
@endsection
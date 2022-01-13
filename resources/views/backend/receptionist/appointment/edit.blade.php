@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Update Appointment</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action={{route('appointment.update', $data->id)}} method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" value="{{$data->name}}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Mobile</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="mobile" class="form-control" name="mobile" value="{{$data->mobile}}">
                            <span class="text-danger">@error('mobile'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="email" class="form-control" name="email" value="{{$data->email}}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Department Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="department_id">
                                <option>Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}" {{ ($data->department_id == $department->id) ? 'selected' : '' }}>{{$department->name}}</option>
                                @endforeach
                                </select>
                            </fieldset>
                        </div>
                         <div class="col-md-4">
                            <label>Doctor Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="doctor_id">
                                <option>Select doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{$doctor->id}}" {{ ($data->doctor_id == $doctor->id) ? 'selected' : ''}}>{{$doctor->name}}</option>
                                @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>                

@endsection
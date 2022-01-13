@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Update Doctor Information</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action={{route('doctor.update', $doctor->id)}} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Doctor Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" value="{{$doctor->name}}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>

                        <div class="col-md-4">
                            <label>Mobile</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="mobile" class="form-control" name="mobile" value="{{$doctor->mobile}}">
                            <span class="text-danger">@error('mobile'){{ $message }} @enderror</span>
                        </div>

                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="email" class="form-control" name="email" value="{{$doctor->email}}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Qualification</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="qualification" class="form-control" name="qualification" value="{{$doctor->qualification}}">
                            <span class="text-danger">@error('qualification'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Photo</label>
                        </div>
                        <div class="col-md-8 form-group">
                             <input type="file" class="form-file-input" id="customFile" name="photo">
                            <span class="text-danger">@error('photo'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Department</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="department_id">
                                <option>Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}" {{$doctor->department_id == $department->id ? 'selected' : ''}}>{{$department->name}}</option>
                                @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <label>Room Number</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="room_no" class="form-control" name="room_no" value="{{$room->room_no}}">
                            <span class="text-danger">@error('room_no'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Day</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="day" class="form-control" name="day" value= "{{$schedule->day}}">
                            <span class="text-danger">@error('day'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Time</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="time" class="form-control" name="time" value= "{{$schedule->time}}">
                            <span class="text-danger">@error('time'){{ $message }} @enderror</span>
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
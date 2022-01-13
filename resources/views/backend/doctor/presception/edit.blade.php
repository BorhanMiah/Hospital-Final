@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Doctor Presception</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action={{route('presception.update', $presception->id)}} method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Doctor Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="d_name" value="{{$presception->d_name}}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Date</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="date" class="form-control" name="date" value="{{$presception->date}}">
                            <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                        </div>
                         <div class="col-md-4">
                            <label>Patient Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="p_name" value="{{$presception->p_name}}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Age</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="age" class="form-control" name="age" value="{{$presception->age}}">
                            <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Gender </label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="gender" class="form-control" name="gender" value="{{$presception->gender}}">
                            <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Disease Description</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="diseas" class="form-control" name="diseas" value="{{$presception->diseas}}">
                            <span class="text-danger">@error('diseas'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>On Examination</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="examination" class="form-control" name="examination" value="{{$presception->examination}}">
                            <span class="text-danger">@error('examination'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Provisional Diagnosis</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="provisional" class="form-control" name="provisional" value="{{$presception->provisional}}">
                            <span class="text-danger">@error('provisional'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Differential Diagnosis</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="differential" class="form-control" name="differential" value="{{$presception->differential}}">
                            <span class="text-danger">@error('differential'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Lab Test</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="lab" class="form-control" name="lab" value="{{$presception->lab}}">
                            <span class="text-danger">@error('lab'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Advices</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="advice" class="form-control" name="advice" value="{{$presception->advice}}">
                            <span class="text-danger">@error('diseas'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Medicine Writing</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="medicine" class="form-control" name="medicine" value="{{$presception->medicine}}">
                            <span class="text-danger">@error('medicine'){{ $message }} @enderror</span>
                        </div>
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
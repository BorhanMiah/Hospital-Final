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
                    <form class="form form-horizontal" action={{route('presception.store')}} method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Doctor Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="d_name" placeholder="Doctor Name">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Date</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="date" class="form-control" name="date" placeholder="Date">
                            <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                        </div>
                         <div class="col-md-4">
                            <label>Patient Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="p_name" placeholder="Patient Name">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Age</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="age" class="form-control" name="age" placeholder="Age">
                            <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Gender </label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="gender" class="form-control" name="gender" placeholder="Gender">
                            <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Disease Description</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="diseas" class="form-control" name="diseas" placeholder="Disease Description">
                            <span class="text-danger">@error('diseas'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>On Examination</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="examination" class="form-control" name="examination" placeholder="On Examination">
                            <span class="text-danger">@error('examination'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Provisional Diagnosis</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="provisional" class="form-control" name="provisional" placeholder="Provisional Diagnosis">
                            <span class="text-danger">@error('provisional'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Differential Diagnosis</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="differential" class="form-control" name="differential" placeholder="Differential Diagnosis">
                            <span class="text-danger">@error('differential'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Lab Test</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="lab" class="form-control" name="lab" placeholder="Lab Test">
                            <span class="text-danger">@error('lab'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Advices</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="advice" class="form-control" name="advice" placeholder="Advices">
                            <span class="text-danger">@error('diseas'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Medicine Writing</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="medicine" class="form-control" name="medicine" placeholder="Medicine Writing">
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
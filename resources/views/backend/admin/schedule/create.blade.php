@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Make Schedule</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action={{route('schedule.store')}} method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Day</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="day" class="form-control" name="day" placeholder="Day">
                            <span class="text-danger">@error('day'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Time</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="time" class="form-control" name="time" placeholder="Time">
                            <span class="text-danger">@error('time'){{ $message }} @enderror</span>
                        </div>
                         <div class="col-md-4">
                            <label>Doctor Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="doctor_id">
                                <option>Select doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
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
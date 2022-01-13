@extends('backend.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-content">
                    <img src="{{asset('backend/assets/images/doctor'.$doctor->photo)}}">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{$doctor->name}}</h5>
                        <p class="card-text">Qualification: {{$doctor->qualification}}</p>
                        <p class="card-text">Mobile: {{$doctor->mobile}}</p>
                        <p class="card-text">Email: {{$doctor->email}}</p>
                        <p class="card-text">Room: {{$room->room_no}}</p>
                        <h5>Schedule</h5>
                        @foreach ($doctor->schedules as $schedule)
                        <p class="card-text">{{$schedule->day}}, ({{$schedule->time}})</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
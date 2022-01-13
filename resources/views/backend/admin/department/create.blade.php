@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Make Appointment</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action={{route('admin.department.store')}} method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Department Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Department Name">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
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
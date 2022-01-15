@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Registration Form</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action={{route('admin.user.store')}} method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
						<div class="col-md-4">
                            <label>Role:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="role" class="form-control" name="role_id" placeholder="Role">
                            <span class="text-danger">@error('role'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Name:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
						<div class="col-md-4">
                            <label>User Name:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="username" placeholder="Name">
                            <span class="text-danger"></span>
                        </div>
                        <div class="col-md-4">
                            <label>Email:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>

					

						<div class="col-md-4">
                            <label>Password:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
<!-- 
						<div class="col-md-4">
                            <label>Password Confirmation:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
                            <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                        </div> -->

                         
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
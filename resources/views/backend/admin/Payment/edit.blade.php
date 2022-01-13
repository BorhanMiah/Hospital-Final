@extends('backend.master')

@section('content')

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Add Payment </h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{route('payment.update',$payment->id)}}" method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Patient Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="p_name" value="{{$payment->p_name}}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Date</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="date" class="form-control" name="date" value="{{$payment->date}}">
                            <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                        </div>
                         <div class="col-md-4">
                            <label>Doctor visiting Price</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="price" class="form-control" name="d_price" value="{{$payment->d_price}}">
                            <span class="text-danger">@error('price'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Test Price</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="price" class="form-control" name="t_price" value="{{$payment->t_price}}">
                            <span class="text-danger">@error('price'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-4">
                            <label>Medicine Price </label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="price" class="form-control" name="m_price" value="{{$payment->m_price}}">
                            <span class="text-danger">@error('price'){{ $message }} @enderror</span>
                        </div>
                        <!--<div class="col-md-4">
                            <label>Total Price</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="price" class="form-control" name="total_price" placeholder="Total Price">
                            <span class="text-danger">@error('price'){{ $message }} @enderror</span>
                        </div>-->
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
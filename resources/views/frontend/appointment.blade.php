<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Make Appointment</title>
  </head>
  <body>

    <div class="container mt-5">
     <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Make Appointment</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{route('patient.appointment.store')}}" method="post">
                    @csrf
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                        </div><br>
                        <div class="col-md-4">
                            <label>Mobile</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Mobile">
                            <span class="text-danger">@error('mobile'){{ $message }} @enderror</span><br>
                        </div><br>
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                        </div><br>
                        <div class="col-md-4">
                            <label>Department Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="department_id">
                                <option>Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                                </select>
                            </fieldset><br>
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
                            </fieldset><br>
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
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

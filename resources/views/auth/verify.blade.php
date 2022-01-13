<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.css')}}">

    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}">
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="{{asset('backend/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
</body>

</html>

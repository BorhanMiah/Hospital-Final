<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href={{asset('backend/assets/css/bootstrap.css')}}>

    <link rel="stylesheet" href={{asset('backend/assets/vendors/chartjs/Chart.min.css')}}>

    <link rel="stylesheet" href={{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}>
    <link rel="stylesheet" href={{asset('backend/assets/css/app.css')}}>
    <link rel="shortcut icon" href={{asset('backend/assets/images/favicon.svg')}} type="image/x-icon">
</head>

<body>
    <div id="app">

        @include('backend.partials.side-navbar')

        <div id="main">

            @include('backend.partials.top-navbar')

            <div class="main-content container-fluid">
                
                <section class="section">

                   @yield('content')
                   
                </section>
            </div>

            @include('backend.partials.footer')
        </div>
    </div>
    
    @include('backend.partials.script')

</body>

</html>
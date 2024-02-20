<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/logo.png">
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/elements/alert.css">
    {{-- <link href="/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" /> --}}
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    <title>Login</title>
</head>
<body>
    @if (session()->has('error'))
            <div class="alert alert-danger mb-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x close" data-dismiss="alert">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button> <strong>Error!</strong> {{ session('error') }}
            </div>
        @endif
<div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="box">

                        @yield('container')

                    </div>                    
                </div>
            </div>
        </div>
    </div>
</body>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    {{-- <script src="/assets/js/authentication/form-2.js"></script> --}}

</html>
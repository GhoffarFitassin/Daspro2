<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/switches.css">
    <link href="/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/plugins/select2/select2.min.css">


    <title>Document</title>
</head>
<body class="form">
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        {{-- content --}}
                        @yield('container')
                        {{-- end content --}}
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
     <script src="/plugins/highlight/highlight.pack.js"></script>
     <script src="/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/js/authentication/form-2.js"></script>
    <script src="/assets/js/scrollspyNav.js"></script>
    <script src="/plugins/select2/select2.min.js"></script>
    <script src="/plugins/select2/custom-select2.js"></script>
</html>
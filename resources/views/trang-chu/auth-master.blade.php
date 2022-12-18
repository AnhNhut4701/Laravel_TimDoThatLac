<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
        <title>Tìm đồ thất lạc</title>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/pages/login.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/materialize.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/libs/sweetalert2/dist/sweetalert2.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                @if(Session::has('errors'))
                    swal({
                        text: "{{ Session::get('errors')->first() }}",
                        type: "error"
                    });
                @endif
            });
        </script>
        @yield('page-js')
    </body>
</html>

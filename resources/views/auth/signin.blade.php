<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/admin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/admin/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/assets/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/admin/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">
    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/pages/dashboard.html">
                            ANCT
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">

                                <li class="nav-item">
                                    <a class="nav-link me-2" href="">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        H??? s??
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('dang-ky') }}">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        ????ng k??
                                    </a>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Free download</a>
                </li>
              </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">ANCT</h3>
                                    <p class="mb-0">VUI L??NG ??I???N TH??NG TIN ????NG NH???P</p>
                                </div>
                                <!-- hi???n th??ng b??o l???i -->
                                @if ($errors->has('error'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('error') }}
                                    </div>
                                @endif
                                <form action="{{ route('xl-dang-nhap') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <form role="form">
                                            <label for="">T??i kho???n<label class="text-danger">*</label></label>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="T??i kho???n"
                                                    name="tai_khoan" value="{{ old('tai_khoan') }}">
                                                <!-- hi???n th??? l???i -->
                                                @if ($errors->any('tai_khoan'))
                                                    <div style="color: red">
                                                        {{ $errors->first('tai_khoan') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <label for="">M???t kh???u<label class="text-danger">*</label></label>
                                            <div class="mb-3">
                                                <input type="password" class="form-control" placeholder="M???t kh???u"
                                                    aria-label="password" aria-describedby="password-addon"
                                                    name="password" value="{{ old('mat_khau') }}">
                                                @if ($errors->has('password'))
                                                    <div style="color: red">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="rememberMe"
                                                    checked="">
                                                <label class="form-check-label" for="rememberMe">Ghi nh???</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">
                                                    ????ng nh???p
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        B???n ch??a c?? t??i kho???n?
                                        <a href="{{ route('dang-ky') }}"
                                            class="text-info text-gradient font-weight-bold">????ng k?? ngay</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('/assets/admin/img/curved-images/goku.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ??
                        <script>
                            document.write(new Date().getFullYear())
                        </script> ANCT.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="/assets/admin/js/core/popper.min.js"></script>
    <script src="/assets/admin/js/core/bootstrap.min.js"></script>
    <script src="/assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/admin/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>

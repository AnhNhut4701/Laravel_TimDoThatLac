<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/log.jpg') }}">
    <title>Tìm đồ thất lạc</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('page-css')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <header class="topbar">
            <nav>
                <div class="nav-wrapper">
                    <a href="{{ route('trang-chu') }}" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="{{ asset('assets/images/log-icon.png') }}">
                        </span>
                        <span class="text">

                            {{-- <img class="light-logo" src="{{ asset('assets/images/logo-light-text.png') }}"> --}}
                            <h6 style="color: white" >Tìm đồ thất lạc</h6>

                        </span>
                    </a>

                    <ul class="left">
                        <li class="search-box">
                            <a href="javascript: void(0);"><i class="material-icons">search</i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Nhập nội dung cần tìm kiếm"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    @if (Auth::guard('web')->check())
                    @php
                    $user = Auth::guard('web')->user();
                    @endphp
                    <ul class="right">
                        <li>
                            <a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown">
                                <img src="{{ asset(Auth::user()->anh_dai_dien) }}" alt="user" class="circle profile-pic">
                            </a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src=" {{ asset(Auth::user()->anh_dai_dien )  }}" alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{ Auth::user()->ho_ten }}</h4>
                                            {{-- <span class="label label-warning">Tài khoản: <sup>đ</sup></span> --}}
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('TrangChu.ThongTinNguoiDung',(Auth::user()->id )) }}"><i class="material-icons">account_circle</i> Quản lý tài khoản</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('TrangChu.danhSachBaiDang',(Auth::user()->id )) }}"><i class="material-icons">view_list</i> Xem bài đăng</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('TrangChu.DangBai') }}"><i class="material-icons">view_list</i> Đăng bài</a></li>

                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('dang-xuat') }}"><i class="material-icons">power_settings_new</i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                </div>
            </nav>
        </header>
        @include('trang-chu.partials.left-sidebar')
        <div class="page-wrapper">
            @yield('content')
            {{-- <footer class="center-align m-b-30 m-l-15 m-r-15">Bản quyền của MoKhoa.VN. Phát triển bởi <a href="https://didotek.vn">DIDOTEK</a>.</footer> --}}
        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/materialize.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/app.init.horizontal.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('page-js')
</body>
</html>

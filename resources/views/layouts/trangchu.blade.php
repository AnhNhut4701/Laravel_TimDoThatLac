<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="{{ asset('assets\images\log.jpg') }}" sizes="32x32"></script>
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com"crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"rel="stylesheet">
    <meta property="fb:app_id" content="513339126724584" /> --}}
    <script>
        const loadScriptsTimer = setTimeout(loadScripts, 5e3),
            userInteractionEvents = ["mouseover", "keydown", "touchmove", "touchstart"];

        function triggerScriptLoader() {
            loadScripts(), clearTimeout(loadScriptsTimer), userInteractionEvents.forEach(function(t) {
                window.removeEventListener(t, triggerScriptLoader, {
                    passive: !0
                })
            })
        }

        function loadScripts() {
            document.querySelectorAll("script[data-type='lazy']").forEach(function(t) {
                t.setAttribute("src", t.getAttribute("data-src"))
            }), document.querySelectorAll("iframe[data-type='lazy']").forEach(function(t) {
                t.setAttribute("src", t.getAttribute("data-src"))
            })
        }
        userInteractionEvents.forEach(function(t) {
            window.addEventListener(t, triggerScriptLoader, {
                passive: !0
            })
        });
    </script>
      <base href="https://timdothatlac.vn/" >

    <script  src="{{ asset('assets/css/library/bootstrap-grid.min.css') }}" type="text/css"></script>
    <script  src="{{ asset('assets/fonts/awesome-5-pro/css/custom.css') }}"></script>
    <!-- CSS -->
    <script  src="{{ asset('assets/css/styles-m.min.css') }}" type="text/css"></script>
    <script  media="screen and (min-width: 992px)" src="{{ asset('assets/css/styles-l.min.cssassets/css/styles-l.min.css') }}"type="text/css"></script>


</head>

<body class=" home-page">

    <div class="container-fuild">
        <header class="header desktop">
            <div class="navigation-wrapper">
                <div class="container">
                    <div class="navigation">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="logo">
                                    <a href="">
                                        <img width="182" height="30" src=""
                                            alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="header-search">
                                    <form action="" method="GET"
                                        class="form-header-search">
                                        <input type="text" id="search_desktop" class="input-search"
                                            aria-label="Nhập thông tin tìm kiếm"
                                            placeholder="Nhập tên trong giấy tờ, tên đồ vật, tên vật nuôi ..."
                                            name="keywords" autocomplete="off">
                                        <button type="submit" aria-label="Tìm kiếm">
                                            <i class="fal fa-search"></i>
                                        </button>
                                    </form>

                                    <div class="search-suggestions" id="search-suggestions-desktop">
                                        <div class="search-suggestions__head">
                                            <p class="search-tutorial text-center mt-3">Nhập từ khóa để tìm kiếm</p>
                                        </div>
                                        <div class="search-suggestions__body">
                                            <div class="loading">
                                                <div class="lds-dual-ring"></div>
                                            </div>
                                            <div class="suggestions-items">
                                            </div>
                                        </div>
                                        <div class="search-suggestions__foot">
                                            <a href="">
                                                <i class="fal fa-search"></i> Tìm kiếm nâng cao
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 order-sm-2 col-lg-3">
                                <div class="menu-center">
                                    <ul>
                                        <li>
                                            <div class="menu-item">
                                                <a aria-label="Đăng tin" class="link"
                                                    href="{{ url('DangTin.dang-tin') }}"><i
                                                        class="fal fa-plus-circle"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="urlGetNotification"
                                                data-url-get-notification="">
                                            </div>
                                            <div class="menu-item">
                                                <button aria-label="Thông báo" class="link" id="brief-notice">
                                                    <i class="fal fa-bell"></i>
                                                </button>
                                                <div class="block block-dropdowns brief-notice">
                                                    <div class="brief-notice__head block-dropdowns__head">
                                                        <h4>Thông báo</h4>
                                                    </div>
                                                    <div class="brief-notice__body block-dropdowns__body">

                                                        <p class="text-danger text-center mt-3">Bạn chưa đăng nhập</p>
                                                        <div class="notify-items">
                                                        </div>
                                                        <div class="loading">
                                                            <div class="lds-dual-ring"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="menu-item">
                                                <button aria-label="Tài khoản" class="link" rel="nofollow"
                                                    id="brief-user">
                                                    <i class="fal fa-user"></i>
                                                </button>

                                                <div class="option-dropdown brief-user">
                                                    <ul>

                                                        <li>
                                                            <a href="{{ Route('dang-xuat') }}">
                                                                <i class="fal fa-pen "></i>
                                                                Đăng nhập
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul>


                                                    </ul>

                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-left sticky-top">
                        <div class="categories">
                            <div class="categories-head">
                                <h2>Menu</h2>
                            </div>
                            <div class="categories-body">
                                <ul>
                                    <li>
                                        <a rel="dofollow" href={{ url('DangTin.dang-tin') }}>
                                            <i class="fal fa-upload"></i>Đăng tin</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{ route('TrangChu.TinCanTim') }}">
                                            <i class="fal fa-frown"></i>Tin cần tìm</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{ Route('TrangChu.TinNhatDuoc') }}">
                                            <i class="fal fa-cube"></i>Tin nhặt được</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{Route('TrangChu.TinThuCung')}}">
                                            <i class="fal fa-paw"></i>Thú cưng</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="">
                                            <i class="fal fa-search"></i>Tìm kiếm nâng cao</a>
                                    </li>
                                    {{-- <li>
                                        <a rel="dofollow" href="">
                                            <i class="fal fa-phone fa-rotate-90 desktop-inline-block"></i>Danh sách SĐT
                                            lừa đảo</a>
                                    </li> --}}
                                    <li class="line"></li>
                                    <li>
                                        <a rel="dofollow" href="{{ route('TrangChu.CacMeoVat') }}"><i class="fal fa-newspaper"></i>Các mẹo vặt</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{ route('TrangChu.CanhBaoLuaDao') }}"><i class="fal fa-shield-alt"></i>Cảnh báo
                                            lừa đảo</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-info-square'></i>Giới
                                            thiệu</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-dollar-sign'></i>Ủng hộ dự
                                            án</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-shield-alt'></i>Chính sách
                                            bảo mật</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-book'></i>Điều khoản sử
                                            dụng</a>
                                    </li>

                                    <li>
                                        <a rel="dofollow" href=""><i class="fal fa-bug"></i>Báo lỗi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="contents">


                @yield('content')
            </div>
        </div>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>
    <div id="user-logged" data-logged="0"></div>
    <script src="base_assets/plugins/jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="base_assets/js/base.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/index/js.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hamburger-menu/js.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/header/js.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1YVMK55WY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-C1YVMK55WY');
    </script>

    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "101930152408187");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };
    </script>
    <script data-type='lazy' data-src="https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js"></script>
</body>

</html>

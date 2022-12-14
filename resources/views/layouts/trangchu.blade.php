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
<<<<<<< HEAD
      <base href="https://timdothatlac.vn/" >
=======
      <base href="https://timdothatlac.vn/">
>>>>>>> 8e21bef62ec24d004e3cb5da7d71c689a3e384f6

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
                                            aria-label="Nh???p th??ng tin t??m ki???m"
                                            placeholder="Nh???p t??n trong gi???y t???, t??n ????? v???t, t??n v???t nu??i ..."
                                            name="keywords" autocomplete="off">
                                        <button type="submit" aria-label="T??m ki???m">
                                            <i class="fal fa-search"></i>
                                        </button>
                                    </form>

                                    <div class="search-suggestions" id="search-suggestions-desktop">
                                        <div class="search-suggestions__head">
                                            <p class="search-tutorial text-center mt-3">Nh???p t??? kh??a ????? t??m ki???m</p>
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
                                                <i class="fal fa-search"></i> T??m ki???m n??ng cao
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
                                                <a aria-label="????ng tin" class="link"
                                                    href="{{ url('DangTin.dang-tin') }}"><i
                                                        class="fal fa-plus-circle"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="urlGetNotification"
                                                data-url-get-notification="">
                                            </div>
                                            <div class="menu-item">
                                                <button aria-label="Th??ng b??o" class="link" id="brief-notice">
                                                    <i class="fal fa-bell"></i>
                                                </button>
                                                <div class="block block-dropdowns brief-notice">
                                                    <div class="brief-notice__head block-dropdowns__head">
                                                        <h4>Th??ng b??o</h4>
                                                    </div>
                                                    <div class="brief-notice__body block-dropdowns__body">

                                                        <p class="text-danger text-center mt-3">B???n ch??a ????ng nh???p</p>
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
                                                <button aria-label="T??i kho???n" class="link" rel="nofollow"
                                                    id="brief-user">
                                                    <i class="fal fa-user"></i>
                                                </button>

                                                <div class="option-dropdown brief-user">
                                                    <ul>

                                                        <li>
                                                            <a href="{{ Route('dang-xuat') }}">
                                                                <i class="fal fa-pen "></i>
                                                                ????ng nh???p
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
<<<<<<< HEAD
<<<<<<< HEAD

        <div class="header-mobile">
            <div class="logo-mobile">
                <a href="">
                    <img src="/storage/images/settings/6366de59d4afd.png" width="35px" height="35px"
                        alt="logo">
                </a>
            </div>
            <div class="search-mobile">
                <div class="header-search">
                    <form action="" method="GET"
                        class="form-header-search">
                        <input type="text" id="search_mobile" aria-label="Nh???p th??ng tin t??m ki???m"
                            class="input-search" placeholder="Nh???p t??n trong gi???y t???..." autocomplete="off"
                            name="keywords">
                        <button type="submit" aria-label="T??m ki???m">
                            <i class="fal fa-search"></i>
                        </button>
                    </form>

                </div>
            </div>
            <div class="hamburger-menu">
                <nav role="navigation">
                    <div id="menuToggle">
                        <div class="overlay menu-overlay"></div>
                        <input type="checkbox" id="toggleHamburgerMenu" />
                        <div id="menu">
                            <div class="tab-wrapper">
                                <ul class="tab">
                                    <li>
                                        <a href="#tab-menu">Menu</a>
                                    </li>
                                    <li>
                                        <a href="#tab-notification" id="btn-tab-notification">Th??ng b??o</a>
                                    </li>
                                    <li>
                                        <a href="#tab-account">T??i kho???n</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-item" id="tab-menu">
                                        <ul>
                                            <li>
                                                <a rel="dofollow" href={{ url('DangTin.dang-tin') }}>
                                                    <i class="fal fa-upload"></i>????ng tin</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href="{{ route('TrangChu.tinCanTim') }}">
                                                    <i class="fal fa-frown"></i>Tin c???n t??m</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href="">
                                                    <i class="fal fa-cube"></i>Tin nh???t ???????c</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href="">
                                                    <i class="fal fa-paw"></i>Th?? c??ng</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href="">
                                                    <i class="fal fa-user"></i>T??m ng?????i</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href="">
                                                    <i class="fal fa-search"></i>T??m ki???m n??ng cao</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href="">
                                                    <i class="fal fa-phone fa-rotate-90 desktop-inline-block"></i>Danh
                                                    s??ch S??T l???a ?????o</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i class="fal fa-newspaper"></i>Tin
                                                    T???c</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i
                                                        class='fal fa-info-square'></i>Gi???i thi???u</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i
                                                        class='fal fa-dollar-sign'></i>???ng h??? d??? ??n</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i
                                                        class='fal fa-shield-alt'></i>Ch??nh s??ch b???o m???t</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i class='fal fa-book'></i>??i???u
                                                    kho???n s??? d???ng</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i
                                                        class="fal fa-shield-alt"></i>C???nh b??o l???a ?????o</a>
                                            </li>
                                            <li>
                                                <a rel="dofollow" href=""><i class="fal fa-bug"></i>B??o
                                                    l???i</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="tab-item" id="tab-notification">
                                        <div class="notify-items">

                                        </div>
                                        <div class="loading">
                                            <div class="lds-dual-ring"></div>
                                        </div>
                                    </div>
                                    <div class="tab-item" id="tab-account">
                                        <ul>
                                            <li>
                                                <a href="">
                                                    <i class="fal fa-sign-in-alt"></i>
                                                    ????ng nh???p
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fal fa-pen "></i>
                                                    ????ng k??
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="copy-right">
                                <p>Copyright 2022 timdothatlac.vn</p>
                            </div>
                        </div>


                    </div>
                </nav>

            </div>

            <div class="search-suggestions" id="search-suggestions-mobile">
                <div class="search-suggestions__head">
                    <p class="search-tutorial text-center mt-3">Nh???p t??? kh??a ????? t??m ki???m</p>
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
                        <i class="fal fa-search"></i> T??m ki???m n??ng cao
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div id="data-url-ajax-search" data-url-ajax-search=""></div>



=======
>>>>>>> 49fa1ca59aed997ed50cf412e6b44e97360a6351
=======
>>>>>>> 8e21bef62ec24d004e3cb5da7d71c689a3e384f6
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
                                            <i class="fal fa-upload"></i>????ng tin</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{ route('TrangChu.TinCanTim') }}">
                                            <i class="fal fa-frown"></i>Tin c???n t??m</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{ Route('TrangChu.TinNhatDuoc') }}">
                                            <i class="fal fa-cube"></i>Tin nh???t ???????c</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{Route('TrangChu.TinThuCung')}}">
                                            <i class="fal fa-paw"></i>Th?? c??ng</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="">
                                            <i class="fal fa-search"></i>T??m ki???m n??ng cao</a>
                                    </li>
                                    {{-- <li>
                                        <a rel="dofollow" href="">
                                            <i class="fal fa-phone fa-rotate-90 desktop-inline-block"></i>Danh s??ch S??T
                                            l???a ?????o</a>
                                    </li> --}}
                                    <li class="line"></li>
                                    <li>
                                        <a rel="dofollow" href="{{ route('TrangChu.CacMeoVat') }}"><i class="fal fa-newspaper"></i>C??c m???o v???t</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href="{{ route('TrangChu.CanhBaoLuaDao') }}"><i class="fal fa-shield-alt"></i>C???nh b??o
                                            l???a ?????o</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-info-square'></i>Gi???i
                                            thi???u</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-dollar-sign'></i>???ng h??? d???
                                            ??n</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-shield-alt'></i>Ch??nh s??ch
                                            b???o m???t</a>
                                    </li>
                                    <li>
                                        <a rel="dofollow" href=""><i class='fal fa-book'></i>??i???u kho???n s???
                                            d???ng</a>
                                    </li>

                                    <li>
                                        <a rel="dofollow" href=""><i class="fal fa-bug"></i>B??o l???i</a>
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

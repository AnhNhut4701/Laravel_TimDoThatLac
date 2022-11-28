




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="VUNA3kpN9wFuYcqx6a7CP1QQaDeJfb4CFUcnxriy">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Title -->
    <title>Tìm Đồ Thất Lạc </title>
    <meta name="description" content="Tìm là thấy - Không Lo Thất Lạc. Ứng dụng tìm kiếm đồ đạc,ví tiền,xe cộ, thú cưng thất lạc tốt nhất">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/log.jpg">
    <link rel="stylesheet" href="https://0711.vn/css/style.css?v=7">
    <link rel="stylesheet" href="https://0711.vn/vendor/bootrap_select/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://0711.vn/vendor/filepond/filepond.css">
    <link rel="stylesheet" href="https://0711.vn/vendor/filepond/filepond-plugin-image-preview.css" >


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168012015-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-168012015-1');
    </script>

    <!-- This site is converting visitors into subscribers and customers with respond.io - https://respond.io -->
    <!-- https://respond.io/ -->

        <meta property="og:title" content="Ứng Dụng Tìm Đồ Thất Lạc & Cho Đồ Miễn Phí | 0711 VN"/>
        <meta property="og:description" content="Dịch vụ tìm kiếm, trả đồ thất lạc miễn phí,tìm thú cưng ,tìm người thân.Bảo vệ tài sản & Cho đồ đạc miễn phí.0711.vn"/>
        <meta property="og:image" content="https://0711.vn/storage/default/share/share_image.jpg"/>





</head>

<body style="background-color:#f2f3f5;">
<!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v7.0'
            });

            FB.Event.subscribe('customerchat.show', function() {
                console.log('customerchat.show');
                $('.close-mess').show();
            });

            FB.Event.subscribe('customerchat.load', function() {
                $('.close-mess').show();
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=install_email
         page_id="100292381455476"
         theme_color="#ff7e29"
         logged_in_greeting="Xin chào, chúng tôi sẽ hỗ trợ bạn tìm đồ."
         logged_out_greeting="Xin chào, chúng tôi sẽ hỗ trợ bạn tìm đồ.">
    </div>
    <div id="popup" >
        <div class="popup__overlay"></div>
        <div class="popup__container">
            <a>
                <img  src="https://0711.vn/assets/images/banner_popup.png" alt="home_popup_banner">
            </a>
            <div class="popup__close-btn" >
                <svg class="popup-svg-icon " enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0">
                    <path d="m10.7 9.2-3.8-3.8 3.8-3.7c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0l-3.8 3.7-3.8-3.7c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l3.8 3.7-3.8 3.8c-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3l3.8-3.8 3.8 3.8c.2.2.4.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"></path>
                </svg>
            </div>
        </div>
    </div>
    <div id="preloader-wrapper">
    <div class="lds-hourglass"></div>
</div>

    <div class="left-float-ads">

</div>

<div class="right-float-ads">

</div>



    <style>
    /*the container must be positioned relative:*/
    .autocomplete {
        position: relative;
    }

    .autocomplete-items {
        position: absolute;
        /* border: 1px solid #d4d4d4; */
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        /* left: 0; */
        /* right: 0; */
    }

    .autocomplete-items div {
        padding: 4px 8px;
        cursor: pointer;
        background-color: #fff;
        /* border-bottom: 1px solid #d4d4d4; */
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        /* background-color: #e9e9e9; */
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
</style>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-3 logo">
                <a href="/"><img src="https://0711.vn/assets/images/logo_0711.png" alt=""></a>
            </div>
            <div class="col-9 d-flex justify-content-between">
                <div class="align-self-center" style="width: 70%">
                    <input id="myInput" type="text" name="keyword" class="form-control" value=""
                    placeholder="Tìm kiếm giấy tờ, thú cưng..." style="text-overflow: ellipsis">
                </div>
                <!-- <div class="align-self-center">
                    <nav class="nav-menu d-none d-lg-block">
                        <ul class="d-flex">
                            <li class="nav-item align-self-center" style="margin-right: 6px"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Không có thông báo nào.">
                                <span><i class="far fa-bell"></i></span>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span><i class="far fa-user-circle"></i></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                                            <a class="dropdown-item" href="/login">Đăng nhập</a>
                                        <a class="dropdown-item" href="/signup">Đăng ký</a>
                                                                    </div>
                            </li>
                        </ul>
                    </nav>
                </div> -->
                <div class="wrapper">
                <tr style="height: 50px;">
                    <td style="text-align: right;">Xin chào {{ Auth::user()->ho_ten }}, <a href="{{route('dang-xuat')}}">Thoát</a></td>
                </tr>
                </div>

        </div>
            </div>
            </div>
    </div>
</header>

    <style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 99;
        top: 0;
        right: 0;
        background-color: white;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    /* .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    } */

    /* .sidenav a:hover {
      color: #f1f1f1;
    } */

    .sidenav .closeNavBtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* @media  screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    } */

    .tab-pane ul {
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        padding-left: 0px;
    }

    .tab-pane ul li {
        margin-right: 15px;
        /* width: calc(50% - 7.5px); */
    }

    .tab-pane ul li a{
        align-items: center;
        background: #f8f9fa!important;
        border: none;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0,0,0,.2);
        display: flex;
        flex-wrap: wrap;
        font-size: 14px;
        font-weight: 600;
        justify-content: flex-start;
        margin-bottom: 10px;
        padding: 15px 10px;
        text-align: center;
        white-space: nowrap;
        width: 100%;
        color: #333;
    }


</style>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closeNavBtn">&times;</a>
    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-menu-tab" data-toggle="tab" href="#nav-menu"
               role="tab" aria-controls="nav-menu" aria-selected="true">Menu</a>
            <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification"
               role="tab" aria-controls="nav-notification" aria-selected="false">Thông báo</a>
            <a class="nav-item nav-link" id="nav-account-tab" data-toggle="tab" href="#nav-account"
               role="tab" aria-controls="nav-account" aria-selected="false">Tài khoản</a>
        </div>
    </nav>
    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
            <ul>
                <li>
                    <a class="navigation-post-new" rel="dofollow" href="#">
                        <i class="icofont-upload-alt"></i>
                        &nbsp;
                        Đăng tin
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/post/type/1">
                        <i class="icofont-confounded"></i>
                        &nbsp;
                        Mất đồ
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/TraDo">
                        <i class="icofont-gift"></i>
                        &nbsp;
                        Nhặt được
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/pets">
                        <i class="fas fa-cat"></i>
                        &nbsp;
                        Tìm thú cưng
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="#">
                        <i class="fas fa-motorcycle"></i>
                        &nbsp;
                        Tìm xe cộ
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/post/type/3">
                        <i class="fas fa-address-card"></i>
                        &nbsp;
                        Danh sách lừa đảo
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/tips">
                        <i class="fas fa-cookie"></i>
                        &nbsp;
                        Mẹo tìm đồ
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/about-us">
                        <i class="fas fa-user icon"></i>
                        &nbsp;
                        Giới thiệu
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="#">
                        <i class="fas fa-dollar-sign"></i>
                        &nbsp;
                        Ủng hộ dự án
                    </a>
                </li>
                <li>
                    <a rel="dofollow" href="/shop">
                        <i class="fas fa-shopping-bag"></i>
                        &nbsp;
                        Cửa hàng
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
            Không có thông báo nào.
        </div>
        <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
            <ul>
                                    <li>
                        <a rel="dofollow" href="/login">
                            <i class="fas fa-sign-in-alt"></i>
                            &nbsp;
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="/signup">
                            <i class="fas fa-user-plus"></i>
                            &nbsp;
                            Đăng ký
                        </a>
                    </li>

            </ul>
        </div>
    </div>
</div>

    <div class="container"  style="margin-top: 32px">
        <div class="row">
            <div class="col-lg-3">
                <ul class="navigation-left-0711 d-none d-lg-block">
    <li>

        <span>Tìm đồ cho mội người</span>
    </li>
    <hr/>
    <li>
        <a href="#" class=" navigation-post-new">
            <i class="icofont-upload-alt"></i>
            Đăng tin
        </a>
    </li>
    <li>
        <a href="/post/type/1" class="">
            <i class="icofont-confounded"></i>
            Mất đồ
        </a>
    </li>
    <li>
        <a href="/TraDo" class="">
            <i class="icofont-gift"></i>
            Nhặt được
        </a>
    </li>
    <li>
        <a href="{{ route('TrangChu.TinCanTim') }}" class="">
            <i class="fas fa-cat"></i>
            Tìm thú cưng
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fas fa-motorcycle"></i>
            Tìm xe cộ
        </a>
    </li>
    <li>
        <a href="/post/type/3" class="">
            <i class="fas fa-address-card"></i>
            Danh sách lừa đảo
        </a>
    </li>
    <hr/>
    <li>
        <a href="/tips" class="">
            <i class="fas fa-cookie"></i>
            Mẹo tìm đồ
        </a>
    </li>
    <li>
        <a href="/about-us" class="">
            <i class="fas fa-user icon"></i>
           Giới thiệu
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fas fa-dollar-sign"></i>
            Ủng hộ dự án
        </a>
    </li>
    <li>
        <a href="/shop" class="">
            <i class="fas fa-shopping-bag"></i>
           Cửa hàng
        </a>
    </li>
</ul>

<style>
    ul.navigation-left-0711 {
      list-style-type: none;
      margin: 0;
      padding: 0;
      /* width: 300px; */
      background-color: #f1f1f1;
    }
    ul.navigation-left-0711 > li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    /* Change the link color on hover */
    ul.navigation-left-0711 > li a:hover {
      background-color: #fad390;
      color: #fff;
      border-radius: 6px;
    }
    ul.navigation-left-0711 > li a.active{
        background-color: #fad390;
        /*color: #fff;*/
        border-radius: 6px;
        pointer-events: none;
        user-select: none;
    }
    ul.navigation-left-0711 > .icon {
      margin-right: 10px;
    }
</style>
            </div>
            <div class="col-lg-9">
                    <div>
    <div class="row">
        @foreach($dsBaiViet as $value)
                    <div class="col-md-4">
                        <div onclick="document.location = '/post/4995'" style="cursor: pointer; background-color: white; border-radius: 8px">
                        <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                            <div class="property-thumb" style="height: 165px !important;">
                                <img src="assets/images/log.jpg" alt="" style="height: 100%">
                                    <div class="priority-post">
                                        <span>Tin ưu tiên</span>
                                    </div>
                                                            </div>
                            <div class="d-flex flex-column" style="padding: 8px">
                                <h6 >{{ $value->tieu_de }}</h6>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <i class="icofont-location-pin"></i><span style="font-size: 12px">{{ $value->khu_vuc }}</span>
                                    </div>
                                    <div>
                                        <img src="{{ $value->hinh_anh }}" width="14" height="14"><span style="font-size: 12px">Tìm đồ</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
            </div>



    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=1003827663090985&autoLogAppEvents=1"></script>
            </div>
        </div>
    </div>

    <script src="https://0711.vn/js/app.js?v=7"></script>
    <script src="https://0711.vn/vendor/bootrap_select/bootstrap-select.min.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond-plugin-image-preview.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond-plugin-file-encode.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond-plugin-file-rename.min.js"></script>
    <script src="https://0711.vn/vendor/ckeditor/ckeditor.js"></script>


    <!-- Main Footer Area -->


    <!--
    <div class="btn-call">
        <a href="tel:0867110711">
            <div class="blob"><i class="icofont-mobile-phone"></i></div>
            <span>Hỗ trợ : 086.711.0711</span>
            <div class="close-container close-phone">
                <div class="leftright"></div>
                <div class="rightleft"></div>
            </div>
        </a>
    </div>
    -->


<script>
    $('.close-container').on('click',function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).parent().hide()
    })

    $('.close-mess').on('click',function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('.close-mess').hide();
        $('#fb-root').hide();
    })
</script>

</body>

</html>

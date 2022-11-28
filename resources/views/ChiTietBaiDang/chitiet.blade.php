@extends('layouts.chitietbaidang')

@section('title', 'bài viết')

@section('TT')
    Danh sách bài viết
@endsection

@section('sidebar')
    @parent
    @if (session('success'))
        <script>
            alter('{{ session('success') }}');
        </script>
    @endif
@section('content')
<div class="posts-item entity">
    <div class="posts-item-head entity-head">
        <div class="entity-head__left">
            <div class="img-user">

                <img src="https://lh3.googleusercontent.com/a/ALm5wu0S5EvlH9YiVTUYtX5SLIJoJLsNnsQ5896M2xDtlA=s96-c"
                    alt="avatar-user">
            </div>
            <div class="info-right">
                <span class="user-name">Vân Trương</span>
                <span class="time-public">23 giờ trước</span>
            </div>
        </div>
        <div class="entity-head__right">
            <button id="posts-options" aria-label="Tùy chọn" class="btn-dropdown">
                <i class="fal fa-ellipsis-v-alt text-danger"></i>
            </button>
            <div class="option-dropdown posts-options">
                <ul>
                    <li>
                        <button id="copy-link" type="button" aria-label="Sao chép liên kết">
                            <i class="fal fa-link"></i>Sao
                            chép liên
                            kết
                        </button>
                    </li>
                    <li>
                        <button id="copy-link" type="button" aria-label="Đẩy tin"
                            class="js-btn-modal" data-id="push-article-modal">
                            <i class="fal fa-upload"></i>
                            Đẩy tin
                        </button>
                    </li>
                    <li>
                        <button id="copy-link" type="button" aria-label="Hỗ trợ tìm kiếm"
                            class="js-btn-modal" data-id="push-article-modal">
                            <i class="fal fa-handshake"></i>
                            Hỗ trợ tìm kiếm
                        </button>
                    </li>

                    <li>
                        <button id="btn-report" class="js-btn-modal" data-id="report-modal"
                            type="button" aria-label="Báo cáo">
                            <i class="fal fa-exclamation-triangle"></i> Báo cáo
                        </button>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="posts-item-body">
        <div class="posts-info">
            <div class="cate">
                <i class="fal fa-frown"></i>Tin cần tìm
            </div>
            <div class="cate">
                <i class="fal fa-bars"></i>Ví/Giấy tờ
            </div>
        </div>
        <div class="posts-title">
            <h1>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về ktx
                43-45 nguyễn chí thanh</h1>
        </div>
        <div class="posts-content">
            <p>Chuyện là trên quãng đường từ đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 (mình có
                dạo một vòng trong nhà để xe ktx), mình có làm rơi 1 chiếc ví màu hồng, bên
                trong có CCCD với tên là Trương Thị Bích Vân. <br />
                Hic, trong Ví hong có nhiều tiền, nhưng mà có nhiều giấy tờ quan trọng. <br />
                *ví có hình dạng và màu sắc tương tự như hình ạ<br />
                *Mình làm rơi chắc vào khoảng thời gian tối ngày 13/11 ạ<br />
                <br />
                SĐT: 0385589410 (Bích Vân)
            </p>

            <div class="posts-info">
                <div class="address">
                    <i class="fal fa-map-marker-alt"></i>&nbsp;
                    TP Hồ Chí Minh

                    , Quận 10

                    , Phường 10
                </div>
            </div>

            <a href="/storage/images/articles/82726dfe-1ddd-41ae-89df-ecdff90d84a7.webp"
                class="fancybox"
                title="Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 nguyễn chí thanh">
                <img width="100%" height="100%"
                    src="/storage/images/articles/82726dfe-1ddd-41ae-89df-ecdff90d84a7.webp"
                    alt="Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 nguyễn chí thanh">
            </a>

        </div>
    </div>
    <div class="posts-item-foot">
        <div class="entity-info">
            <div class="entity-info__head">
                <div class="info-left">
                    <div class="number-item number-like">
                        <i class="fal fa-comment"></i>2 <span>bình luận</span>
                    </div>
                </div>
                <div class="info-right">

                    <div class="share">
                        <div class="share-title">Share:</div>
                        <div id="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh"
                                        target="_blank" class="social-button " id=""
                                        title="" rel=""><span
                                            class="fab fa-facebook-square"></span>&nbsp;Facebook</a>
                                </li>
                                <li><a href="https://twitter.com/intent/tweet?text=&url=https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh"
                                        target="_blank" class="social-button " id=""
                                        title="" rel=""><span
                                            class="fab fa-twitter"></span>&nbsp;Twitter</a>
                                </li>
                                <li><a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url=https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh&title=&summary="
                                        target="_blank" class="social-button " id=""
                                        title="" rel=""><span
                                            class="fab fa-linkedin"></span>&nbsp;Linkedin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="entity-info__foot">
                <div class="comments">
                    <div class="comments__body">
                        <div class="item-parent">
                            <div class="img-user-text-32">
                                <p>C</p>
                            </div>
                            <div class="content-center">
                                <div class="content_comment">
                                    <div class="content_comment__head">
                                        <strong>Nguyễn Đức Chung</strong>&nbsp;<i
                                            class="fal fa-shield-check text-success"></i><span>&nbsp;Quản
                                            trị viên</span>
                                    </div>
                                    <p>Mẹo: Bạn có thể chia sẻ bài đăng này lên các nhóm trên
                                        Facebook thay vì phải đăng bài nhiều lần.</p>
                                    <div class="comment-action">
                                        <button type="button" class="btn">
                                            <i class="fal fa-ellipsis-h-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="content-additional">

                                    <span>23 giờ trước</span>
                                </div>
                                <div class="items-child">
                                    <div class="item">
                                        <div class="img-user-text-32">
                                            <p>C</p>
                                        </div>
                                        <div class="content">
                                            <div class="content_comment">
                                                <div class="content_comment__head">
                                                    <strong>Nguyễn Đức Chung</strong>&nbsp;<i
                                                        class="fal fa-shield-check text-success"></i><span>&nbsp;Quản
                                                        trị viên</span>
                                                </div>
                                                <p>Mỗi nội dung chỉ được đăng 1 bài, các bài
                                                    trùng lặp nội dung sẽ không được duyệt.</p>
                                                <div class="comment-action">
                                                    <button type="button" class="btn">
                                                        <i class="fal fa-ellipsis-h-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="content-additional">


                                                <span>23 giờ trước</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comments__head">

                    </div>
                    <div class="comments__foot">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

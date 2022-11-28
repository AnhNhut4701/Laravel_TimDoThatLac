<div class="posts-item entity">
    <div class="posts-item-head entity-head">
        <div class="entity-head__left">
            <div class="img-user">

                <img src="https://graph.facebook.com/v3.3/758426608557663/picture?type=normal" alt="avatar-user">
            </div>
            <div class="info-right">
                @foreach ($ctBaiViet as $value)


                <span class="user-name">{{ $value->ho_ten }}</span>
                <span class="time-public">{{ $value->created_at->diffForHumans() }}</span>


                @endforeach
            </div>
        </div>
        <div class="entity-head__right">
            <button id="posts-options" aria-label="Tùy chọn" class="btn-dropdown">
                <i class="fal fa-ellipsis-v-alt text-danger"></i>
            </button>
            <div class="option-dropdown posts-options">
                <ul>
                    {{-- <li>
                        <button id="copy-link" type="button" aria-label="Sao chép liên kết">
                            <i class="fal fa-link"></i>Sao
                            chép liên
                            kết
                        </button>
                    </li>
                    <li>
                        <button id="copy-link" type="button" aria-label="Đẩy tin" class="js-btn-modal"
                            data-id="push-article-modal">
                            <i class="fal fa-upload"></i>
                            Đẩy tin
                        </button>
                    </li>
                    <li>
                        <form action="https://timdothatlac.vn/posts/delete" method="POST">
                            <input type="hidden" name="_token" value="OiMeS5QDIyIDcaATHyl0D11LfOukmbJm1OVCxJFL">
                            <input type="hidden" name="id" value="125062">
                            <button type="submit" aria-label="Gửi yêu cầu xóa bài viết">
                                <i class="fal fa-trash"></i>
                                Gửi yêu cầu xóa bài
                            </button>
                        </form>
                    </li>

                    <li>
                        <button id="btn-report" class="js-btn-modal" data-id="report-modal" type="button"
                            aria-label="Báo cáo">
                            <i class="fal fa-exclamation-triangle"></i> Báo cáo
                        </button>
                    </li> --}}


                </ul>
            </div>
        </div>
    </div>
    <div class="posts-item-body">


        @foreach ($ctBaiViet as $value)


        <div class="posts-info">
            <div class="cate">
                <i class="fal fa-cube"></i>Tin nhặt được
            </div>
            <div class="cate">
                <i class="fal fa-bars"></i>Chìa khóa
            </div>
        </div>
        <div class="posts-title">
            <h1>Nhặt được chùm chìa khóa Smartkey ở Định Công - Hoàng Mai - Hà Nội</h1>
        </div>
        <div class="posts-content">
            <p>Ngày 15/9 trên đường đi học về mình đi qua cầu Định Công - Hà Nội <br />
                Mình có nhặt đc chùm chìa khoá này trên nối rẽ lên cầu <br />
                Liên hệ sđt 0965024155 để nhận chùm chìa khoá này ạ<br />
                <br />
                Sđt 0965024155
            </p>

            <div class="posts-info">
                <div class="address">
                    <i class="fal fa-map-marker-alt"></i>&nbsp;
                    Hà Nội

                    , Quận Hoàng Mai

                    , Phường Định Công
                </div>
            </div>
            <a href="/storage/images/articles/f8bb72df-2fde-44d5-b443-f40dc0159cd7.webp" class="fancybox"
                title="Nhặt được chùm chìa khóa Smartkey ở Định Công - Hoàng Mai - Hà Nội">
                <img width="100%" height="100%"
                    src="/storage/images/articles/f8bb72df-2fde-44d5-b443-f40dc0159cd7.webp"
                    alt="Nhặt được chùm chìa khóa Smartkey ở Định Công - Hoàng Mai - Hà Nội">
            </a>

        </div>
        @endforeach
    </div>
    <div class="posts-item-foot">
        <div class="entity-info">
            <div class="entity-info__head">
                <div class="info-left">
                    <div class="number-item number-like">
                        <i class="fal fa-comment"></i>2 <span>bình luận</span>
                    </div>
                    <div class="number-item number-view">
                        <i class="fal fa-eye"></i>5.7K <span>lượt xem</span>
                    </div>
                </div>
                <div class="info-right">

                    <div class="share">
                        <div class="share-title">Share:</div>
                        <div id="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://timdothatlac.vn/posts/nhat-duoc-chum-chia-khoa-smartkey-o-dinh-cong-hoang-mai-ha-noi"
                                        target="_blank" class="social-button " id="" title=""
                                        rel=""><span class="fab fa-facebook-square"></span>&nbsp;Facebook</a>
                                </li>
                                <li><a href="https://twitter.com/intent/tweet?text=&url=https://timdothatlac.vn/posts/nhat-duoc-chum-chia-khoa-smartkey-o-dinh-cong-hoang-mai-ha-noi"
                                        target="_blank" class="social-button " id="" title=""
                                        rel=""><span class="fab fa-twitter"></span>&nbsp;Twitter</a>
                                </li>
                                <li><a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url=https://timdothatlac.vn/posts/nhat-duoc-chum-chia-khoa-smartkey-o-dinh-cong-hoang-mai-ha-noi&title=&summary="
                                        target="_blank" class="social-button " id="" title=""
                                        rel=""><span class="fab fa-linkedin"></span>&nbsp;Linkedin</a>
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
                                    <p>
                                    <ul>
                                        <li>- Nội dung thanh toán chuyển khoản đẩy tin như sau:
                                            '<b>DAY TIN 125062</b>'
                                        </li>
                                        <li>- Phí đẩy tin là: 50.000 VNĐ</li>
                                        <li>- Số tài khoản: 11055117</li>
                                        <li>- Ngân hàng: ACB</li>
                                        <li>- Chủ tài khoản: NGUYEN DUC CHUNG</li>
                                    </ul>
                                    </p>
                                    <div class="comment-action">
                                        <button type="button" class="btn">
                                            <i class="fal fa-ellipsis-h-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="content-additional">

                                    <span>2 tháng trước</span>
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
                                                    trùng lặp nội dung sẽ không
                                                    được duyệt.</p>
                                                <div class="comment-action">
                                                    <button type="button" class="btn">
                                                        <i class="fal fa-ellipsis-h-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="content-additional">


                                                <span>2 tháng trước</span>
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

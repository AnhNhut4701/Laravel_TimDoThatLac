@extends('layouts.timkiem')

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
    <div class="both-sides-title">
        <h4>Tìm thấy 1268 kết quả</h4>
        <button class="btn-primary js-btn-modal btn-show-filter-modal" data-id="filter-modal">
            <i class="fal fa-filter"></i> Bộ lọc
        </button>
    </div>
    <div class="posts-list">
        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                    <h3>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về
                        ktx 43-45 nguyễn chí thanh</h3>
                </a>
            </div>

            <a rel="dofollow"
                href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh"
                class="image">
                <img src="/storage/images/articles/dd4eb126-8ad5-43e0-b782-87f74075d280.webp"
                    alt="Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 nguyễn chí thanh"
                    width="100%" height="100%">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                        <h3>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa
                            Bình) về ktx 43-45 nguyễn chí thanh</h3>
                    </a>
                </div>
                <div class="description">
                    <p>Chuyện là trên quãng đường từ đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 (mình
                        có dạo một vòng trong nhà để xe ktx), mình...</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>&nbsp; TP Hồ Chí Minh
                    </div>
                    <div class="time">
                        <i class="fal fa-clock"></i>&nbsp; 23 giờ trước
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>
        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                    <h3>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về
                        ktx 43-45 nguyễn chí thanh</h3>
                </a>
            </div>

            <a rel="dofollow"
                href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh"
                class="image">
                <img src="/storage/images/articles/dd4eb126-8ad5-43e0-b782-87f74075d280.webp"
                    alt="Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 nguyễn chí thanh"
                    width="100%" height="100%">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                        <h3>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa
                            Bình) về ktx 43-45 nguyễn chí thanh</h3>
                    </a>
                </div>
                <div class="description">
                    <p>Chuyện là trên quãng đường từ đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 (mình
                        có dạo một vòng trong nhà để xe ktx), mình...</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>&nbsp; TP Hồ Chí Minh
                    </div>
                    <div class="time">
                        <i class="fal fa-clock"></i>&nbsp; 23 giờ trước
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>
        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                    <h3>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về
                        ktx 43-45 nguyễn chí thanh</h3>
                </a>
            </div>

            <a rel="dofollow"
                href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh"
                class="image">
                <img src="/storage/images/articles/dd4eb126-8ad5-43e0-b782-87f74075d280.webp"
                    alt="Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 nguyễn chí thanh"
                    width="100%" height="100%">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                        <h3>Rơi ví và giấy tở tên Trương Thị Bích Vân từ Đường 3/2 (nhà hát Hòa
                            Bình) về ktx 43-45 nguyễn chí thanh</h3>
                    </a>
                </div>
                <div class="description">
                    <p>Chuyện là trên quãng đường từ đường 3/2 (nhà hát Hòa Bình) về ktx 43-45 (mình
                        có dạo một vòng trong nhà để xe ktx), mình...</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>&nbsp; TP Hồ Chí Minh
                    </div>
                    <div class="time">
                        <i class="fal fa-clock"></i>&nbsp; 23 giờ trước
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>
        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="https://timdothatlac.vn/posts/roi-vi-giay-to-tuy-than-mang-ten-mai-anh-nhat-o-ngo-337-dinh-cong-hoang-mai-ha-noi">
                    <h3>Rơi ví, giấy tờ tùy thân mang tên Mai Anh Nhật ở ngõ 337 Định Công, Hoàng
                        Mai, Hà Nội</h3>
                </a>
            </div>

            <a rel="dofollow"
                href="https://timdothatlac.vn/posts/roi-vi-giay-to-tuy-than-mang-ten-mai-anh-nhat-o-ngo-337-dinh-cong-hoang-mai-ha-noi"
                class="image">
                <img width="100%" height="100%" src="/storage/images/categories/33a5606b-5886-48c7-ba1c-bf3d713d8c3c.jpg"
                    alt="Rơi ví, giấy tờ tùy thân mang tên Mai Anh Nhật ở ngõ 337 Định Công, Hoàng Mai, Hà Nội">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-giay-to-tuy-than-mang-ten-mai-anh-nhat-o-ngo-337-dinh-cong-hoang-mai-ha-noi">
                        <h3>Rơi ví, giấy tờ tùy thân mang tên Mai Anh Nhật ở ngõ 337 Định Công,
                            Hoàng Mai, Hà Nội</h3>
                    </a>
                </div>
                <div class="description">
                    <p>Sáng ngày 14/11 trên đoạn đường từ ngõ 337 Định Công đi ra Trịnh Đình Cửu tôi
                        có đánh rơi 1 chiếc ví màu nâu trong đó có...</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>&nbsp; Hà Nội
                    </div>
                    <div class="time">
                        <i class="fal fa-clock"></i>&nbsp; 1 ngày trước
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>
        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="https://timdothatlac.vn/posts/roi-vi-va-mot-so-giay-to-mang-ten-tran-dinh-minh-hoang-o-gigamall-thu-duc-tp-hcm">
                    <h3>Rơi ví và một số giấy tờ mang tên Trần Đình Minh Hoàng ở Gigamall Thủ Đức TP
                        HCM</h3>
                </a>
            </div>

            <a rel="dofollow"
                href="https://timdothatlac.vn/posts/roi-vi-va-mot-so-giay-to-mang-ten-tran-dinh-minh-hoang-o-gigamall-thu-duc-tp-hcm"
                class="image">
                <img width="100%" height="100%" src="/storage/images/categories/33a5606b-5886-48c7-ba1c-bf3d713d8c3c.jpg"
                    alt="Rơi ví và một số giấy tờ mang tên Trần Đình Minh Hoàng ở Gigamall Thủ Đức TP HCM">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-va-mot-so-giay-to-mang-ten-tran-dinh-minh-hoang-o-gigamall-thu-duc-tp-hcm">
                        <h3>Rơi ví và một số giấy tờ mang tên Trần Đình Minh Hoàng ở Gigamall Thủ
                            Đức TP HCM</h3>
                    </a>
                </div>
                <div class="description">
                    <p>Chiều tối ngày 13/11 khoảng 19h40 em có đánh rơi 1 bóp tiền nam màu đen tại
                        tầng 6 Gigamall TĐ, bao gồm:
                        - CCCD
                        - Bằng...</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>&nbsp; TP Hồ Chí Minh
                    </div>
                    <div class="time">
                        <i class="fal fa-clock"></i>&nbsp; 2 ngày trước
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>
        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="https://timdothatlac.vn/posts/roi-vi-va-1-so-giay-to-quan-trong-mang-ten-pham-thi-trang-o-hem-793-tran-xuan-soan-gan-chua-kieu-dam">
                    <h3>Rơi ví và 1 số giấy tờ quan trọng mang tên Phạm Thị Trang ở Hẻm 793 Trần
                        Xuân Soạn gần chùa Kiều Đàm</h3>
                </a>
            </div>

            <a rel="dofollow"
                href="https://timdothatlac.vn/posts/roi-vi-va-1-so-giay-to-quan-trong-mang-ten-pham-thi-trang-o-hem-793-tran-xuan-soan-gan-chua-kieu-dam"
                class="image">
                <img src="/storage/images/articles/4d93ae5d-befb-4d77-8d42-905aa34ece75.webp"
                    alt="Rơi ví và 1 số giấy tờ quan trọng mang tên Phạm Thị Trang ở Hẻm 793 Trần Xuân Soạn gần chùa Kiều Đàm"
                    width="100%" height="100%">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-va-1-so-giay-to-quan-trong-mang-ten-pham-thi-trang-o-hem-793-tran-xuan-soan-gan-chua-kieu-dam">
                        <h3>Rơi ví và 1 số giấy tờ quan trọng mang tên Phạm Thị Trang ở Hẻm 793 Trần
                            Xuân Soạn gần chùa Kiều Đàm</h3>
                    </a>
                </div>
                <div class="description">
                    <p>Vào lúc 22h30 tại hẻm 793 Trần Xuân Soạn gần chùa Kiều Đàm quận 7 em có làm
                        rơi 1 ví như hình bên trong có
                        - CCCD
                        - B...</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>&nbsp; TP Hồ Chí Minh
                    </div>
                    <div class="time">
                        <i class="fal fa-clock"></i>&nbsp; 2 ngày trước
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

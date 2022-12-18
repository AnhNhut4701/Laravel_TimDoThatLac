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
        @foreach ($dsBaiViet as $value)


        <div class="posts list">
            <div class="title-mobile">
                <a rel="dofollow"
                    href="">
                    <h3>{{ $value->tieu_de }}</h3>
                </a>
            </div>

            <a rel="dofollow"
                href=""
                class="image">
                <img src="/storage/images/articles/dd4eb126-8ad5-43e0-b782-87f74075d280.webp"
                    alt="{{ $value->tieu_de }}"
                    width="100%" height="100%">
            </a>
            <div class="info">

                <div class="title-desktop">
                    <a rel="dofollow"
                        href="https://timdothatlac.vn/posts/roi-vi-va-giay-to-ten-truong-thi-bich-van-tu-duong-3-2-nha-hat-hoa-binh-ve-ktx-43-45-nguyen-chi-thanh">
                        <h3>{{ $value->tieu_de }}</h3>
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
        @endforeach

    </div>
@endsection

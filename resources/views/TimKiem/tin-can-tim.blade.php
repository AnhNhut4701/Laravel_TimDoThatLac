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
        @foreach ($dsTinMatDo as $value)

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
                        href="">
                        <h3>{{ $value->tieu_de }}</h3>
                    </a>
                </div>
                <div class="description">
                    <p>{{ $value->noi_dung }}</p>
                </div>

                <div class="additional-info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>   {{ $value->khu_vuc }}
                    </div>
                    <div >
                        <i class="fal fa-clock"></i>   {{ $value->created_at->diffForHumans() }}
                    </div>
                    <div class="cate">

                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
@endsection

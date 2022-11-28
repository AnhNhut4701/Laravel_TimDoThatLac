@extends('layouts.trangchu')

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
            <div class="posts-list mt-3">
                @foreach ($dsBaiViet as $value)
                <div class="posts list">
                    <div class="title-mobile">
                        <a rel="dofollow"
                            href="">
                            <h3>{{ $value->tieu_de }}</h3>
                        </a>
                    </div>

                    <a rel="dofollow" href=""
                        class="image">
                        <span class="posts-view">
                            <i class="fal fa-eye"></i>{{-- Lượt xem: chưa xử lý --}}
                        </span>
                        <img width="100%" height="100%"
                            src="{{asset('assets\admin\img\curved-images\goku.jpg')  }}"
                            alt="">
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
                                <i class="fal fa-map-marker-alt"></i>{{ $value->khu_vuc }}
                            </div>
                            <div class="time">
                                <i class="fal fa-clock"></i>{{ $value->created_at->diffForHumans() }}
                            </div>
                            <div class="cate">

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>


@endsection

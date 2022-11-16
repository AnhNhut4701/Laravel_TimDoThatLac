@extends('layouts.tintuc')
@section('content')
    <div class="both-sides-title">
        <h1>Tin tức</h1>
    </div>
    @foreach ($dsTinTuc as $value)
        <div class="news">
            <div class="posts list">
                <div class="title-mobile">
                    <a rel="dofollow" href="">
                        <h3>{{ $value->tieu_de }}</h3>
                    </a>
                </div>
                <a rel="dofollow" href="" class="image">
                    <img src="{{asset('assets\admin\img\illustrations\rocket-white.png')  }}" alt="{{ $value->tieu_de }}"
                        width="100%" height="100%">
                </a>
                <div class="info">

                    <div class="title-desktop">
                        <a rel="dofollow" href="">
                            <h3>{{ $value->tieu_de }}</h3>
                        </a>
                    </div>
                    <div class="description">
                        <p>{{ $value->noi_dung }}</p>
                    </div>

                    <div class="additional-info">
                        <div class="published-at">
                            <i class="fal fa-clock"></i>{{ $value->thoi_gian }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

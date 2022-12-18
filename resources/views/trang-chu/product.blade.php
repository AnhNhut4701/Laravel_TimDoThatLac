@extends('trang-chu.master')
@section('content')
<div class="container-fluid m-t-20">
    <div class="row">
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s6 l12">
                            <h1>{{ $BaiViet->tieu_de }}</h1>
                            {{-- <span class="label label-warning">Thời gian: {{ $BaiViet->created_at }}</span>

                            <span class="label label-info">Giá: {{ number_format($product->price) }}<sup>đ</sup></span> --}}

                            @php
                                $hinhAnh = "assets/images/CCCD.jpg";
                            @endphp


                            <img src="{{ asset($hinhAnh) }}" alt="{{ $BaiViet->tieu_de }}" />

                            <h4>{{ $BaiViet->noi_dung }}</h4><br>
                            <h4>{{ $BaiViet->khu_vuc }}</h4><br>
                            <h4>{{ $BaiViet->created_at }}</h4><br>

                        </div>
                        {{-- <div class="col s6 l12">
                            <div class="divider m-t-5 m-b-5"></div>
                            <h5 class="card-title activator">{{ $BaiViet-> }}</h5>
                            <h6 class="card-subtitle">Sau mỗi IMEI hãy nhấn ENTER để nhập IMEI mới</h6>

                            <div class="chips chips-placeholder"></div>
                        </div> --}}
                    </div>

                    <div class="row">
                        {{-- <div class="col l12">
                            <a href="{{ route('trang-chu') }}" class="waves-effect waves-light btn purple" style="width: 100%">Quay lại</a>
                        </div> --}}

                    </div>

                </div>

            </div>
            <div class="col l13">
                <a href="{{ route('trang-chu') }}" class="waves-effect waves-light btn purple" style="width: 100%">Quay lại</a>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                {{-- <div class="card-content">
                    {!! $BaiViet->noi_dung !!}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-css')
<style>
.label {
    font-size: 100% !important;
}
</style>
@endsection

@section('page-js')
@endsection

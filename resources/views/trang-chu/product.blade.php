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
                            <h4>{{ $BaiViet->created_at->diffForHumans() }}</h4><br>
                            {{-- <span class="label label-warning">Thời gian: {{ $BaiViet->created_at }}</span>

                            <span class="label label-info">Giá: {{ number_format($product->price) }}<sup>đ</sup></span> --}}
                            <h4>{{ $BaiViet->noi_dung }}</h4><br>
                            @php
                                $hinhAnh = "assets/images/CCCD.jpg";
                            @endphp


                            <img src="{{ asset($hinhAnh) }}" alt="{{ $BaiViet->tieu_de }}" />


                            <h4>{{ $BaiViet->khu_vuc }}</h4><br>

                            {{-- <div class="preview">
                                <div style="margin-top:20px">
                                    <div class="container-fliud text-dark">
                                        <span><b>Hình ảnh: </b></span>
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @foreach ($ctBaiViet as $item)
                                                    <img class="img-reponsive" src="{{ asset($item->ten_hinh_anh) }}" height="100"
                                                        width="100">
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

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

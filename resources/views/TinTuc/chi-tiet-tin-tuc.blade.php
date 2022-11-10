@extends('layouts.app')

@section('title', 'Chi tiết')

@section('TT')
    Chi tiết tin tức
@endsection

@section('sidebar')
    @parent
    <div class="container-fliud">
        <div class="text-center">
            <h2>Chi tiết tin tức</h2>
        </div>
    </div>
    <div style="margin-top:30px"></div>
    <div class="row">
        <div class="col-6">
            <div style="margin-top:20px">
                <div class="container-fliud text-dark">
                    <span><b>Tiêu đề: </b></span>{{ $TinTuc->tieu_de }}
                </div>
            </div>
            <div style="margin-top:20px">
                <div class="container-fliud text-dark">
                    <span><b>Nội dung: </b></span>{{ $TinTuc->noi_dung }}
                </div>
            </div>
            <div class="preview">
                <div style="margin-top:20px">
                    <div class="container-fliud text-dark">
                        <span><b>Hình ảnh: </b></span>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($dsHinh as $item)
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
            </div>
        </div>
    </div>
    <div style="margin-top:20px">
        <div class="align-middle text-end">
            <a href="{{ route('TinTuc.suaTinTuc', ['id' => $TinTuc->id]) }}" class="btn btn-outline-success">Sửa</a>
            <a onclick="return confirm('Bạn có chắc muốn xoá tin tức với ID = {{ $TinTuc->id }} ')"
                href="{{ route('TinTuc.xoaTinTuc', ['id' => $TinTuc->id]) }}" class="btn btn-outline-danger">Xoá</a>
            <a onclick="return confirm('Bạn muốn quay lại trang danh sách?')"
                href="{{ route('TinTuc.dsTinTuc', ['id' => $TinTuc->id]) }}" class="btn btn-outline-secondary">Quay lại</a>
        </div>
    </div>
@endsection

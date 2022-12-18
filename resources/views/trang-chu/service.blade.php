@extends('trang-chu.master')
@section('content')
<div class="container-fluid m-t-20">
    <div class="row">
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">{!! $Baiviet->description !!}</div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex align-items-center">
                        <div>

                            <h5 class="card-title">Danh sách sản phẩm dịch vụ</h5>
                            <h6 class="card-subtitle">Lưu ý : Xem hướng dẫn trước khi đặt hàng.</h6>
                        </div>
                    </div>
                    <div class="table-responsive m-b-20">
                        <table>
                            <thead>
                                <tr class="grey lighten-4">
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service->products as $product)
                                <tr>
                                    <td>
                                        <div class="d-flex no-block align-items-center">
                                            <div class="">
                                                <h5 class="m-b-0 font-16 font-medium">{{ $product->name }}</h5>
                                                <span>Thời gian: {{ $product->duration }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ number_format($product->price) }}<sup>đ</sup></td>
                                    <td>
                                        @if (auth()->guard('web')->check())
                                        <a href="{{ route('san-pham', ['sSlug' => $product->service->slug, 'pSlug' => $product->slug]) }}" class="waves-effect waves-light btn"><i class="material-icons right">shopping_cart</i>Đặt hàng</a>
                                        @else
                                        <a href="{{ route('dang-nhap') }}" class="waves-effect waves-light btn orange"><i class="material-icons right">lock_open</i>Đăng nhập để đặt hàng</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-css')
@endsection

@section('page-js')
@endsection

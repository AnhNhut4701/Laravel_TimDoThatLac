@extends('trang-chu.master')
@section('content')

{{-- @foreach ()
 --}}
    <div class="row">
        {{-- <div class="col s12">
            <h4 class="card-title dark-text">{{ $value-> }} </h4>
        </div> --}}
    <div>
    <div class="container-fluid m-t-20">
        <div class="row el-element-overlay">
            @foreach ($dsTinMatDo as $value)
            <div class="col m6 l3 s12">
                <div class="card">
                    <div class="card-image">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                @php
                                $hinhAnh = "assets/images/CCCD.jpg";
                                @endphp


                                <img src="{{ asset($hinhAnh) }}" alt="{{ $value->tieu_de }}" />
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li><a class="btn-floating image-popup-vertical-fit" style="display: none" href="{{ asset($hinhAnh) }}"></a></li>
                                        <li><a class="btn-floating" href="{{ route('TrangChu.ChiTiet',$value->id) }}"><i class="material-icons">link</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex no-block align-items-center">
                                <div class="m-l-15">
                                    <h5 class="m-b-0">{{ $value->tieu_de }} </h5>
                                    <small>{{ $value->noi_dung }}</small>
                                </div>
                                <div class="ml-auto m-r-10">
                                    {{-- <a href="{{ route('dich-vu', ['sSlug' => $service->slug]) }}" class="btn-floating btn-large waves-effect waves-light teal">Xem</a> --}}
                                </div>

                            </div>
                            <div class="time">
                                <i class=""></i>{{ $value->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

{{-- @endforeach --}}
@endsection

@section('page-css')
<link href="{{ asset('assets/css/pages/card.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
@endsection

@section('page-js')
<script src="{{ asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".image-popup-vertical-fit").magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            image: {
                verticalFit: false
            }
        });
    });
</script>
@endsection

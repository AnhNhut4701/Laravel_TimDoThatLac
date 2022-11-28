@extends('layouts.app')

@section('title', 'bài viết')

@section('TT')
    Danh sách bài viết chờ duyệt
@endsection

@section('sidebar')
    @parent
    @if (session('success'))
        <script>
            alter('{{ session('success') }}');
        </script>
    @endif
    <form action="{{ Route('BaiViet.timKiemBaiViet') }}" method="post">
        @csrf
        <div class="card-header pb-0">
            <div class="row align-items-start">
                <div class="col-4">
                    <div class="mp-3">
                        <label for="exampleFormControlInput1" class="form-label">Tin tức</label>
                        <select class="form-select" aria-label="Default select example" name="loai_bai_viet_id">
                            <option value="0">Tất cả</option>
                            @foreach ($LoaiBaiViet as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_bai_viet }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
                        <select class="form-select" aria-label="Default select example" name="ten_danh_muc">
                            <option value="0">Tất cả</option>
                            @foreach ($DanhMuc as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_danh_muc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2 my-4">
                    <button type="submit" class="btn btn-success">Tìm kiếm</button>
    </form>
    <a href="{{ route('TuChoiDuyet.dsBaiVietTuChoiDuyet') }}">
        <button type="button" class="btn btn-info">Danh sách bài viết từ chối duyệt</button>
    </a>
    </div>
    </div>
    <div class="card-header pb-0">
        <div class="row align-items-start">
            <div class="col-6">
                <h6>DANH SÁCH BÀI VIẾT ĐANG CHỜ DUYỆT</h6>
            </div>
            <div class="col-6 align-middle text-end">
                <a href="{{ route('BaiViet.themBaiViet') }}" class="text-end" style="color: blue"> Thêm bài viết</a>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center ">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                #
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Người đăng
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Tin tức
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Danh mục
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Tiêu đề
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Khu vực
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Ngày tạo
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Trạng thái
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsBaiViet as $key => $value)
                            <tr>
                                <td class="align-middle">
                                    <span class="badge badge-sm bg-gradient-success">{{ $key + 1 }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->ho_ten }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->ten_bai_viet }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->ten_danh_muc }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->tieu_de }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->khu_vuc }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">

                                        @if ($value->created_at != '')
                                            {{ $value->created_at }} - {{ $value->created_at->diffForHumans() }}
                                        @endif

                                    </span>
                                </td>
                                @if ($value->trang_thai == 0)
                                    <td class="align-middle text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Đang chờ duyệt</span>
                                    </td>
                                @elseif ($value->trang_thai == 1)
                                    <td class="align-middle text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Đã duyệt</span>
                                    </td>
                                @else
                                    <td class="align-middle text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Từ chối</span>
                                    </td>
                                @endif
                                <td class="align-middle">
                                    <a href="{{ route('DuyetBaiViet.chiTietDuyetBaiViet', ['id' => $value->id]) }}">
                                        <button type="button" class="btn btn-info">Chi tiết</button>
                                    </a>
                                    <a onclick="if(confirm('Bạn muốn duyệt bài viết này?'))
                                     Swal.fire({
                                        position: 'top-right',
                                        icon: 'success',
                                        title: 'Duyệt thành công',
                                        showConfirmButton: false,
                                        timer: 3000})}"
                                        href="{{ route('DuyetBaiViet.duyetBaiViet', ['id' => $value->id]) }}"
                                        class="btn btn-success">Duyệt</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container text-center my-5">
            {{ $dsBaiViet->links() }}
        </div>
    @endsection

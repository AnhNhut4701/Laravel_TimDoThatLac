@extends('layouts.app')

@section('title', 'tin tức')

@section('TT')
    Danh sách tin tức
@endsection

@section('sidebar')
    @parent
    @if (session('success'))
        <script>
            alter('{{ session('success') }}');
        </script>
    @endif

    {{-- POST --}}
    <form action="{{ Route('TinTuc.timKiemTinTuc') }}" method="POST">
        @csrf
        <div class="card-header pb-0">
            <div class="row align-items-start">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tin tức</label>
                        <select class="form-select" aria-label="Default select example" name="loai_tin_tuc_id">
                            <option value="0">Tất cả</option>
                            @foreach ($lsLoai as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_tin_tuc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-2 my-4">
                    <button type="submit" class="btn btn-success">Tìm kiếm</button>
    </form>
    <a href="{{ route('BaiViet.dsBaiViet') }}">
        <button type="button" class="btn btn-info">Danh sách tin tức đã xoá</button>
    </a>
    </div>
    </div>
    <div class="card-header pb-0">
        <div class="row align-items-start">
            <div class="col-6">
                <h6>DANH SÁCH TIN TỨC</h6>
            </div>
            <div class="col-6 align-middle text-end">
                <a href="{{ route('TinTuc.themTinTuc') }}" class="text-end" style="color: blue"> Thêm tin tức</a>
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
                                Tiêu đề
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Khu vực
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Ngày tạo
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Ngày cập nhật
                            </th>
                            <th class="text-uppercase text-black text-xxs font-weight-bolder">
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsTinTuc as $key => $value)
                            <tr>
                                <td class="align-middle">
                                    <span class="badge badge-sm bg-gradient-success">{{ $key + 1 }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->ho_ten }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">{{ $value->ten_tin_tuc }}</span>
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
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">
                                        @if ($value->updated_at != '')
                                            {{ $value->updated_at }} - {{ $value->updated_at->diffForHumans() }}
                                        @endif
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('TinTuc.chiTietTinTuc', ['id' => $value->id]) }}">
                                        <button type="button" class="btn btn-info">Chi tiết</button>
                                    </a>
                                    <br>
                                    <a href="{{ route('TinTuc.suaTinTuc', ['id' => $value->id]) }}">
                                        <button type="button" class="btn btn-warning">Sửa</button>
                                    </a>
                                    <a onclick="if(confirm('Bạn có chắc muốn xoá tin tức với ID = {{ $value->id }} '))
                                        {
                                            Swal.fire({
                                            position: 'top-right',
                                            icon: 'warning',
                                            title: 'Xóa thành công',
                                            showConfirmButton: false,
                                            timer: 3000
                                            })}"
                                        href="{{ route('TinTuc.xoaTinTuc', ['id' => $value->id]) }}"
                                        class="btn btn-danger">Xóa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container text-center my-5">
            {{ $dsTinTuc->links() }}
        </div>
    @endsection

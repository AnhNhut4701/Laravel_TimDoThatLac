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
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                STT
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Người đăng
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Tin tức
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Tiêu đề
                            </th>
                           {{--  <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Nội dung
                            </th> --}}
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Thời gian
                            </th>
                            {{-- <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Trạng thái
                            </th> --}}
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsTinTuc as $key=> $value)
                            <tr>
                                <td class="align-middle text-center ">
                                    <span class="badge badge-sm bg-gradient-success">{{ $key + 1 }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->ho_ten }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->ten_tin_tuc }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->tieu_de }}</span>
                                </td>
                               {{--  <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->noi_dung }}</span>
                                </td> --}}

                                <td>
                                    <p class="text-xs text-center font-weight-bold mb-0">{{ $value->thoi_gian }}</p>
                                </td>
                                {{-- @if ($value->trang_thai == 1)
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Đang hoạt động</span>
                                    </td>
                                @else
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Ngưng hoạt động</span>
                                    </td>
                                @endif --}}
                                <td class="align-middle text-end">
                                    <a href="{{ route('TinTuc.suaTinTuc', ['id' => $value->id]) }}">
                                        <button type="button" class="btn btn-success">Sửa</button>
                                    </a>
                                    <a href="{{ route('TinTuc.chiTietTinTuc', ['id' => $value->id]) }}">
                                        <button type="button" class="btn btn-secondary">Chi tiết</button>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xoá tin tức với ID = {{ $value->id }} ')"
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

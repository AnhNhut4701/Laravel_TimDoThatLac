@extends('layouts.app')

@section('title', 'người dùng')

@section('TT')
    Danh sách tài khoản
@endsection

@section('sidebar')
    @parent
    @if (session('success'))
        <script>
            alter('{{ session('success') }}');
        </script>
    @endif
    <form action="{{ Route('NguoiDung.timKiemNguoiDung') }}" method="POST">
        @csrf
        <div class="card-header pb-0">
            <div class="row align-items-start">
                <div class="row">
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" id="tai_khoan" placeholder="Tìm theo tên tài khoản"
                            name="tai_khoan">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Tìm theo email"
                            name="email">
                    </div>
                    {{--  <div class="mp-3">
                        <select class="form-select" aria-label="Default select example" name="tai_khoan">
                            <option value="0">Người dùng</option>
                            @foreach ($dsNguoiDung as $value)
                                <option value="{{ $value->id }}">{{ $value->tai_khoan }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="col-1 my-4">
                        <button type="submit" class="btn btn-success">Tìm</button>
                    </div>
                    <div class="col-2 my-4">
                        <a href="{{ route('NguoiDung.dsNguoiDung') }}">
                            <button type="button" class="btn btn-success">Load danh sách</button>
                        </a>
                    </div>

                </div>


    </form>
    {{--     <a href="{{ route('Nguo.dsBaiViet') }}">
        <button type="button" class="btn btn-info">Danh sách tin tức đã xoá</button>
    </a> --}}
    </div>
    </div>
    <div class="card-header pb-0">
        <div class="row align-items-start">
            <div class="col-6">
                <h6>DANH SÁCH TÀI KHOẢN</h6>
            </div>
            <div class="col-6 align-middle text-end">
                <a href="{{ route('NguoiDung.themNguoiDung') }}" class="text-end" style="color: blue"> Thêm tài khoản</a>
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
                                Ảnh đại diện
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Tài khoản
                            </th>

                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Họ tên
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Email
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Số điện thoại
                            </th>

                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Phân quyền
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Trạng thái
                            </th>
                            <th class=" text-center text-uppercase text-black text-xxs font-weight-bolder ">
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsNguoiDung as $key => $value)
                            <tr>
                                <td class="align-middle text-center ">
                                    <span class="badge badge-sm bg-gradient-success">{{ $key + 1 }}</span>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1 text-center align-middle">
                                        <div>
                                            <img src="{{ asset($value->anh_dai_dien) }}" class="rounded-circle"
                                                alt="user1" width="100px" height="100px">
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->tai_khoan }}</span>
                                </td>

                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->ho_ten }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->email }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{ $value->so_dien_thoai }}</span>
                                </td>

                                <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{ $value->phan_quyen }}</p>
                                </td>
                                @if ($value->trang_thai == 0)
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Còn hoạt động</span>
                                    </td>
                                @else
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Bị khóa</span>
                                    </td>
                                @endif
                                <td class="align-middle text-end">
                                    <a href="{{ route('NguoiDung.suaNguoiDung', ['id' => $value->id]) }}">
                                        <button type="button" class="btn btn-success">Sửa</button>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xoá tài khoản {{ $value->tai_khoan }} ?')"
                                        href="{{ route('NguoiDung.xoaNguoiDung', ['id' => $value->id]) }}"
                                        class="btn btn-danger">Xóa
                                    </a>
                                    <a href="{{ route('NguoiDung.dsNguoiDung') }}">
                                        <button type="button" class="btn btn-success">Khóa</button>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container text-center my-5">
            {{ $dsNguoiDung->links() }}
        </div>
    @endsection

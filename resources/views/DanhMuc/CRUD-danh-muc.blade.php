@extends('layouts.app')
@section('title', 'Danh mục')
@section('TT')
    Danh sách danh mục
@endsection
@section('sidebar')
    @parent

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{-- Thêm danh mục --}}
    @if ($danhMuc == null)
        <form action="{{ route('DanhMuc.themDanhMucPost') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row col-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên danh mục<label class="text-danger">*</label></label>
                    <input type="text" class="form-control" placeholder="Tên danh mục" name="ten_danh_muc"
                        value="{{ old('ten_danh_muc') }}">
                    @error('ten_danh_muc')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary my-2">Thêm</button>
        </form>
    @else
        {{-- Sửa danh mục --}}
        <form action="{{ route('DanhMuc.suaDanhMuc', ['id' => $danhMuc->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row col-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên danh mục<label class="text-danger">*</label></label>
                    <input type="text" class="form-control" placeholder="Tên danh mục" name="ten_danh_muc"
                        value="{{ old('ten_danh_muc') ?? $danhMuc->ten_danh_muc }}">
                    @error('ten_danh_muc')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary my-2">Lưu</button>
            <button type="button" class="btn btn-outline-danger my-2">Hủy</button>
        </form>
    @endif
    {{-- Tạo table để load danh sách danh mục --}}
    <div class="card-header pb-0">
        <h6>DANH SÁCH DANH MỤC</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase  text-xxs font-weight-bolder">
                            STT
                        </th>
                        <th class="text-center text-uppercase  text-xxs font-weight-bolder">
                            Tên danh mục
                        </th>
                        <th class=" text-uppercase text-black text-xxs font-weight-bolder">
                            Chức năng
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Load danh sách danh mục từ database lên view --}}
                    @foreach ($dsDanhMuc as $key => $value)
                        <tr>
                            <td class="align-middle text-center ">
                                <span class="badge badge-sm bg-gradient-success">{{ $key + 1 }}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs font-weight-bold">{{ $value->ten_danh_muc }}</span>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('DanhMuc.suaDanhMuc', ['id' => $value->id]) }}">
                                    <button type="button" class="btn btn-success">Sửa</button>
                                </a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xoá {{ $value->ten_danh_muc }}?')"
                                    href="{{ route('DanhMuc.xoaDanhMuc', ['id' => $value->id]) }}"
                                    class="btn btn-danger">Xóa
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

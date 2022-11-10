@extends('layouts.app')

@section('title', 'Danh sách người dùng')

@section('TT')
    Thêm tài khoản
@endsection

@section('sidebar')
    @parent
    <form action="{{ route('NguoiDung.themNguoiDungPost') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tài khoản</label>
                        <select class="form-select" aria-label="Default select example" name="tai_khoan">
                            @foreach ($lsLoai as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_tin_tuc }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề" name="tieu_de"
                        value="{{ old('tieu_de') }}">
                    @error('DiaChi')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                    <textarea class="form-control" rows="3" placeholder="Nội dung" name="noi_dung" id="ckeditor">{{ old('noi_dung') }}</textarea>
                    @error('noi_dung')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Hình ảnh</label>
                    <input class="form-control" type="file" id="ten_hinh_anh" name="image[]"
                        value="{{ old('ten_hinh_anh') }}" multiple="multiple">
                    @error('ten_hinh_anh')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="align-middle text-end">
                    <button type="submit" class="btn btn-outline-success ">Thêm</button>
                    <button type="button" class="btn btn-outline-danger">Hủy</button>
                </div>
    </form>
    </div>

@endsection

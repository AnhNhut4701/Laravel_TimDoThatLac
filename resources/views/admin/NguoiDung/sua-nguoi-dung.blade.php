@extends('layouts.app')


@section('title', 'người dùng')

@section('TT')
    Sửa tài khoản
@endsection

@section('sidebar')
    @parent
    <form action="{{ route('NguoiDung.suaNguoiDung', ['id' => $NguoiDung->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3">

            <label for="formFileMultiple" class="form-label">Ảnh đại diện</label>
            <input class="form-control" type="file" id="formFileMultiple" name="anh_dai_dien">
            @error('anh_dai_dien')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            <img src="{{ asset($NguoiDung->anh_dai_dien) }}" alt=""
                style="width:100px; max-height: 100px; object-fit:contain">
            @error('anh_dai_dien')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tài khoản<label class="text-danger">*</label></label>
            <input disabled type="text" class="form-control" placeholder="Tiêu đề" name="tai_khoan"
                value="{{ old('tai_khoan') ?? $NguoiDung->tai_khoan }}">
            @error('tai_khoan')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>

        {{--    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password"
                value="{{ old('password') ?? $NguoiDung->password }}">
            @error('tieu_de')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" placeholder="Mật khẩu" name="confirm_password"
                value="{{ old('confirm_password') ?? $NguoiDung->confirm_password }}">
            @error('tieu_de')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>
        --}}

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Họ tên<label class="text-danger">*</label></label>
            <input type="text" class="form-control" placeholder="Họ tên" name="ho_ten"
                value="{{ old('ho_ten') ?? $NguoiDung->ho_ten }}">
            @error('ho_ten')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <textarea  type="email" class="form-control" rows="3"placeholder="Nội dung" name="email">{{ old('email') ?? $NguoiDung->email }} </textarea>
            @error('email')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Số điện thoại</label>
            <textarea  type="number" class="form-control" rows="3"placeholder="Nội dung" name="so_dien_thoai">{{ old('so_dien_thoai') ?? $NguoiDung->so_dien_thoai }} </textarea>
            @error('so_dien_thoai')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="exampleFormControlTextarea1" class="form-label">Quyền<label class="text-danger">*</label></label>
            <div class="row">

                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="phan_quyen"
                                value="{{ $NguoiDung->phan_quyen }}">
                            {{-- <label class="form-check-label" for="{{ $NguoiDung->phan_quyen }}">
                                {{ $NguoiDung->phan_quyen }}
                            </label> --}}
                        </div>
                    </div>

            </div>
        </div>

        <div class="align-middle text-end">
            <button type="submit" class="btn btn-outline-success ">Lưu</button>
            <button type="button" class="btn btn-outline-danger">Hủy</button>

        </div>
    </form>
@endsection

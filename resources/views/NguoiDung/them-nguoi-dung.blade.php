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
                        <label for="">Tài khoản<label class="text-danger">*</label></label>
                        <input type="text" class="form-control" placeholder="Tài khoản" aria-describedby="email-addon"
                            name="tai_khoan" value="{{ old('TaiKhoan') }}">
                        @if ($errors->has('tai_khoan'))
                            <p class="text-danger">{{ $errors->first('tai_khoan') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Mật khẩu<label class="text-danger">*</label></label>
                            <input type="password" class="form-control" placeholder="Mật khẩu" aria-label="password"
                                aria-describedby="password-addon" name="password" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="">Xác nhận mật khẩu<label class="text-danger">*</label></label>
                            <input type="password" class="form-control" placeholder="Xác nhận mật khẩu"
                                aria-label="password" aria-describedby="password-addon" name="confirm_password"
                                value="{{ old('confirm_password') }}">
                            @if ($errors->has('confirm_password'))
                                <p class="text-danger">{{ $errors->first('confirm_password') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="">Họ và tên<label class="text-danger">*</label></label>
                            <input type="text" class="form-control" placeholder="Họ và tên" name="ho_ten"
                                value="{{ old('ho_ten') }}">
                            @if ($errors->has('ho_ten'))
                                <p class="text-danger">{{ $errors->first('ho_ten') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="">Ảnh đại diện</label>
                            <input class="form-control" type="file" accept="image/*" name="anh_dai_dien">
                            @if ($errors->has('anh_dai_dien'))
                                <p class="text-danger">{{ $errors->first('anh_dai_dien') }}</p>
                            @endif
                        </div>

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

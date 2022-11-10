@extends('layouts.app')

@section('title', 'Danh sách tin tức')

@section('TT')
    Thêm tin tức
@endsection

@section('sidebar')
    @parent
    <form action="{{ route('TinTuc.themTinTucPost') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Loại tin tức<label
                            class="text-danger">*</label></label>
                        <select class="form-select" aria-label="Default select example" name="loai_tin_tuc_id">
                            @foreach ($lsLoai as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_tin_tuc }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tiêu đề<label
                        class="text-danger">*</label></label>
                        <textarea class="form-control" rows="2" placeholder="Tiêu đề" name="tieu_de">{{ old('tieu_de') }}</textarea>
                    @error('tieu_de')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung<label
                        class="text-danger">*</label></label>
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

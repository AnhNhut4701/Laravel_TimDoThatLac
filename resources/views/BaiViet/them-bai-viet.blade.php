@extends('layouts.app')

@section('title', 'Danh sách bài viết')

@section('TT')
    Thêm bài viết
@endsection

@section('sidebar')
    @parent
    <form action="{{ route('BaiViet.themBaiViet') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Bài viết<label
                                class="text-danger">*</label></label>
                        <select class="form-select" aria-label="Default select example" name="loai_bai_viet_id">
                            @foreach ($LoaiBaiViet as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_bai_viet }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlTextarea1" class="form-label">
                            Danh mục<label class="text-danger">*</label>
                        </label>
                        <select class="form-select" aria-label="Default select example" name="danh_muc_id">
                            @foreach ($DanhMuc as $value)
                                <option value="{{ $value->id }} ">
                                    {{ $value->ten_danh_muc }} </option>
                            @endforeach
                        </select>
                        </select>
                        @error('danh_muc_id')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <label for=""></label>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Khu vực<label
                            class="text-danger">*</label></label>
                    <textarea class="form-control" rows="2" placeholder="Khu vực" name="khu_vuc">{{ old('khu_vuc') }}</textarea>
                    @error('khu_vuc')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
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
                    <textarea class="form-control" rows="10" placeholder="Nội dung" name="noi_dung" id="ckeditor">{{ old('noi_dung') }}</textarea>
                    @error('noi_dung')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Hình ảnh</label>
                    <input class="form-control image-preview" onchange="previewFile(this);" type="file" id="image"
                        name="image[]" value="{{ old('image') }}" multiple="multiple">
                    <img id="previewImg" src="http://aimory.vn/wp-content/uploads/2017/10/no-image.png" alt=""
                        width="100px" height="100px">
                    @error('image')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="align-middle text-end">
            <button type="submit" class="btn btn-outline-success ">Thêm</button>
            <button type="button" class="btn btn-outline-danger">Hủy</button>
        </div>
    </form>
    </div>

@endsection

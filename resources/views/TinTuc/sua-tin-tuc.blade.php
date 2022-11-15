@extends('layouts.app')


@section('title', 'tin tức')

@section('TT')
    Sửa tin tức
@endsection

@section('sidebar')
    @parent
    <form action="{{ route('TinTuc.suaTinTuc', ['id' => $TinTuc->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3 col-4">
            <label for="exampleFormControlTextarea1" class="form-label">Loại tin tức<label
                    class="text-danger">*</label></label>
            <select class="form-select" aria-label="Default select example" name="loai_tin_tuc_id">

                @foreach ($lsLoai as $value)
                    <option value="{{ $value->id }}">{{ $value->ten_tin_tuc }}</option>
                @endforeach


            </select>
            </select>
            @error('loai_tin_tuc_id')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tiêu đề<label class="text-danger">*</label></label>
            <textarea class="form-control" rows="2" placeholder="Tiêu đề" name="tieu_de">{{ old('tieu_de') ?? $TinTuc->tieu_de }}</textarea>
            @error('tieu_de')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nội dung<label class="text-danger">*</label></label>
            <textarea class="form-control" rows="3"placeholder="Nội dung" id="ckeditor" name="noi_dung">{{ old('noi_dung') ?? $TinTuc->noi_dung }} </textarea>
            @error('noi_dung')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>
        {{-- Lỗi --}}
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="formFileMultiple" name="ten_hinh_anh" multiple="multiple">
            {{--       <input class="form-control" type="file" id="ten_hinh_anh" name="image[]"
                        value="{{ old('ten_hinh_anh') }}" multiple="multiple"> --}}
            @error('ten_hinh_anh')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            <img src="{{ $TinTuc->ten_hinh_anh }}" alt=""
                style="width:100px; max-height: 100px; object-fit:contain">
            @error('ten_hinh_anh')
                <span style="color:red"> {{ $message }}</span>
            @enderror
        </div>
        <div class="align-middle text-end">
            <a onclick="return confirm('Bạn có muốn lưu chỉnh sửa lần này?')">
                <button type="submit" class="btn btn-outline-success">Lưu</button>
            </a>
            {{--  <button type="submit" class="btn btn-outline-success">Lưu</button> --}}
            <a onclick="return confirm('Bạn có muốn hủy chỉnh sửa lần này?')"
                href="{{ route('TinTuc.dsTinTuc', ['id' => $TinTuc->id]) }}" class="btn btn-outline-danger">Hủy</a>


        </div>
    </form>
@endsection

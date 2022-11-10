<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLoaiTinTucRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nguoi_dung_id' => 'required|integer',
            'loai_tin_id' => 'required|integer',
            'tieu_de' => 'required',
            'noi_dung' => 'required',

        ];
    }
    public function messages()
    {
        return [

            'nguoi_dung_id.required' => 'Người dùng không được để trống',
            'loai_tin_id.required' => 'Loại tin tức không được để trống',
            'tieu_de.required' => 'Tiêu đề không được để trống',
            'noi_dung.required' => 'Nội dung không được để trống',
        ];
    }
}

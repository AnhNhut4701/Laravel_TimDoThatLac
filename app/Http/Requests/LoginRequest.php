<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        //Requests chưa đúng
        return [

            'tai_khoan' => 'required',
            'mat_khau' => 'required',
        ];
    }
    public function messages(){
        return [
            'tai_khoan.required' =>'Vui lòng nhập tên tài khoản',
            'mat_khau.required'=>'Vui lòng nhập mật khẩu'
        ];
    }
}

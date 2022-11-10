<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.dang-nhap');
    }
    public function dangKy()
    {
        return view('Auth.dang-ky');
    }
    public function xuLyDangKy(Request $request)
    {
        $rule = [
            'tai_khoan' => 'required|unique:nguoi_dungs,tai_khoan|between:5,20',
            'password' => 'required|between:5,20',
            'confirm_password' => 'required|between:5,20|same:password',
            'ho_ten' => 'required|between:5,20',
            'email' => 'nullable|email|max:50|unique:nguoidungs,email',
            'so_dien_thoai' => 'nullable|numeric',
            //'anh_dai_dien' => 'required|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $message = [
            'tai_khoan.required' => 'Tài khoản không được để trống',

            'unique' => ':attribute đã tồn tại',
            'between' => ':attribute phải từ 5 đến 20 ký tự',
            'required' => ':attribute không được để trống',

            'numeric' => ':attribute phải là số',
            'email' => ':attribute không đúng định dạng',
            'same' => ':attribute không trùng khớp',

            'image' => ':attribute không đúng định dạng',
            'min' => ':attribute phải lớn hơn :min',
            'max' => ':attribute phải nhỏ hơn :max',
            'mimes' => ':attribute không đúng định dạng',
        ];
        $attribute = [
            'tai_khoan' => 'Tài khoản',
            'password' => 'Mật khẩu',
            'confirm_password' => 'Mật khẩu xác nhận',
            'ho_ten' => 'Họ và tên',
            'email' => 'Email',
            'so_dien_thoai' => 'Số điện thoại',
            //'anh_dai_dien' => 'Ảnh đại diện',

        ];
        $request->validate($rule, $message, $attribute);

        if ($request->hasFile('anh_dai_dien')) {
            $file = $request->file('anh_dai_dien');
            $fileType = $file->getClientOriginalExtension('anh_dai_dien');
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = 'avatar-' . time() . '.' . $fileType;
                $file->move('uploads/avatar/', $AvatarName);
                $urlAvatar = 'uploads/avatar/' . $AvatarName;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
        $nguoiDung = NguoiDung::create([
            'tai_khoan' => $request->tai_khoan,
            'mat_khau' => Hash::make($request->password),
            'ho_ten' => $request->ho_ten,
            'anh_dai_dien' => ($urlAvatar),
            'phan_quyen' => 1,
            'trang_thai_ho_ten' => 1,
            'trang_thai_email' => 1,
            'trang_thai_so_dien_thoai' => 1,
            'trang_thai_nguoi_dung' => 1,
        ]);

        $nguoiDung->save();
        return View('Auth.dang-nhap')->with('success', 'Đăng ký thành công');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function edit(NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiDung $nguoiDung)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




            return view('trang-chu.index');

        //return view("TimKiem.tin-can-tim");

        //return view('Trangchu.trang-chu-nguoi-dung');
    }

    public function dangNhap()
    {
        return view('auth.signin');
    }
    public function xuLyDangNhap(Request $request)
    {

        //Validator
        $rule = [
            'tai_khoan' => 'required',
            'password' => 'required',
        ];
        $message = [
            'tai_khoan.required' => 'Tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
        ];
        $request->validate($rule, $message);

        $credentials = $request->only('tai_khoan', 'password');

        $MK = Hash::make($credentials['password']);

        $nguoiDung =  NguoiDung::where('tai_khoan',$request->tai_khoan)->where('mat_khau',$MK)->first();

        if (Auth::attempt($credentials)) {
            return redirect()->route('trang-chu');
        }

        return back()->withErrors(['error' => 'Tài khoản hoặc mật khẩu không chính xác']);
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
}

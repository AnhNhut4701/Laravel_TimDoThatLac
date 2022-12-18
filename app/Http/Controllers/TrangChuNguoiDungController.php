<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrangChuNguoiDungController extends Controller
{
    

      public function index()
      {
        return view('trang-chu-nguoi-dung');
          //return view('trang-chu');
      }
}

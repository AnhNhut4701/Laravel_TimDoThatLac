<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrangChuController extends Controller
{
    Public function __construct(){

        $this->middleware('auth');
      }

      public function index()
      {
        return view('Home.home');
      }
      public function tincantim()
      {
        return view('TimKiem.tin-can-tim');
      }
      public function tinnhatduoc()
      {
        return view('TimKiem.tin-nhat-duoc');
      }
      public function tinthucung()
      {
        return view('TimKiem.tin-thu-cung');
      }
      public function canhbaoluadao()
      {
        return view('TinTuc.canh-bao-lua-dao');
      }
      public function cacmeovat()
      {
        return view('TinTuc.cac-meo-vat');
      }
      public function chitietbaiviet()
      {
        return view('ChiTiet.chi-tiet-bai-viet');
      }
}

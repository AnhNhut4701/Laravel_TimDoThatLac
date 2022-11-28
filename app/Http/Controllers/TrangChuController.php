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
        //return view('trang-chu');
      }

      public function tinnhatduoc()
      {
        return view('TimKiem.tin-nhat-duoc  ');
        //return view('trang-chu');
      }
}

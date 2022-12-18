<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BaiViet;
use App\Models\DanhMuc;
use App\Models\HinhAnhBaiViet;
use App\Models\LoaiBaiViet;
use App\Models\NguoiDung;
class TrangChuController extends Controller
{
    Public function __construct(){

        $this->middleware('auth');
      }

      public function index()
      {
<<<<<<< HEAD

        return view('TimKiem.tin-can-tim');
          //return view('trang-chu');
=======
        return view('trang-chu.index');
      }
      public function tincantim()
      {
        return view('trang-chu.matdo_index');
      }
      public function tinnhatduoc()
      {
        return view('trang-chu.nhatdo_index');
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
        return view('trang-chu.product');
      }
      public function dangbai()
      {
        $BaiViet = BaiViet::all();
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $dsHinh = HinhAnhBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('trang-chu.dang-bai', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
      }
      public function chitiet(Request $id)
      {
        $BaiViet = BaiViet::where('id', $id->id)->first();
        return view("trang-chu.product",compact('BaiViet') );
>>>>>>> 8e21bef62ec24d004e3cb5da7d71c689a3e384f6
      }

}

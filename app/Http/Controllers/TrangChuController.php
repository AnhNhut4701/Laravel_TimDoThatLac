<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BaiViet;
use App\Models\TinTuc;
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
        return view('trang-chu.canh-bao-lua-dao');
      }
      public function cacmeovat()
      {
        return view('trang-chu.meo-vat');
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
      }
      public function chiTietTinTuc(Request $id)
      {
        $TinTuc = TinTuc::where('id', $id->id)->first();
        return view("trang-chu.ct-tin-tuc",compact('TinTuc') );
      }
      public function thongtinnguoidung(Request $rqt)
      {
        $NguoiDung = NguoiDung::where('id', $rqt->id)->first();
        return view("trang-chu.thong-tin-nguoi-dung", compact('NguoiDung') );
      }
      public function dsBaiDang(Request $rqt)
      {
        $NguoiDung = NguoiDung::where('id', $rqt->id)->first();
        return view("trang-chu.danh-sach-bai-dang", compact('NguoiDung') );
      }

}

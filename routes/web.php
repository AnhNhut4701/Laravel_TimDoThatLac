<?php

use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TinTucController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('/', [LoginController::class, 'index'])->name('trang-chu');

Route::get('/dang-nhap', [LoginController::class, 'dangNhap'])->name('dang-nhap')->middleware(('guest'));
Route::post('/dang-nhap', [LoginController::class, 'xuLyDangNhap'])->name('xl-dang-nhap')->middleware(('guest'));
Route::get('/dang-xuat', [LoginController::class, 'dangXuat'])->name('dang-xuat')->middleware(('auth'));
Route::get('/dang-ky', [RegisterController::class, 'dangKy'])->name('dang-ky')->middleware(('guest'));
Route::post('/dang-ky', [RegisterController::class, 'xuLyDangKy'])->name('dang-ky')->middleware(('guest'));

Route::middleware('auth')->group(function () {
    //Route::get('/', [TrangChuController::class, 'index'])->name('trang-chu')->middleware(('auth'));
    Route::prefix('admin')->group(function () {
        //Route::get('/', [TrangChuController::class, 'index'])->name('trang-chu')->middleware(('auth'));

        //Bài viết
        Route::prefix('baiviet')->group(function () {
            Route::name('BaiViet.')->group(function () {
                Route::get('/', [BaiVietController::class, 'index'])->name('dsBaiViet');
                Route::get('/sua-bai-viet/{id}', [BaiVietController::class, 'edit'])->name('suaBaiViet');
                Route::patch('/sua-bai-viet/{id}', [BaiVietController::class, 'update'])->name('suaBaiVietPatch');
                Route::get('/chi-tiet-bai-viet/{id}', [BaiVietController::class, 'show'])->name('chiTietBaiViet');
                Route::get('/them-bai-viet', [BaiVietController::class, 'create'])->name('themBaiViet');
                Route::post('/them-bai-viet', [BaiVietController::class, 'store'])->name('themBaiVietPost');
                Route::get('/xoa-bai-viet/{id}', [BaiVietController::class, 'destroy'])->name('xoaBaiViet');
                route::post('/timKiemBaiViet', [BaiVietController::class, 'search'])->name('timKiemBaiViet');
                //load danh sách xoá mềm
            });
        });

        // Duyệt bài viết
        Route::prefix('duyetbaiviet')->group(function () {
            Route::name('DuyetBaiViet.')->group(function () {
                Route::get('/', [BaiVietController::class, 'dsBaiVietChoDuyet'])->name('dsBaiVietChoDuyet');
                Route::get('/chi-tiet-bai-viet/{id}', [BaiVietController::class, 'chiTietDuyetBaiViet'])->name('chiTietDuyetBaiViet');
                Route::get('/duyet-bai-viet/{id}', [BaiVietController::class, 'duyetBaiViet'])->name('duyetBaiViet');
            });
        });
        // Từ chối duyệt
        Route::prefix('tuchoiduyet')->group(function () {
            Route::name('TuChoiDuyet.')->group(function () {
                Route::get('/', [BaiVietController::class, 'dsBaiVietTuChoiDuyet'])->name('dsBaiVietTuChoiDuyet');
                Route::get('/chi-tiet-bai-viet/{id}', [BaiVietController::class, 'chiTietTuChoiDuyet'])->name('chiTietTuChoiDuyet');
                Route::get('/tu-choi-duyet-bai-viet/{id}', [BaiVietController::class, 'tuChoiDuyetBaiViet'])->name('tuChoiDuyetBaiViet');
                Route::get('/xoa-bai-viet/{id}', [BaiVietController::class, 'xoaBaiVietTuChoiDuyet'])->name('xoaBaiVietTuChoiDuyet');
            });
        });

        //Tin tức
        Route::prefix('tintuc')->group(function () {
            Route::name('TinTuc.')->group(function () {
                Route::get('/', [TinTucController::class, 'index'])->name('dsTinTuc');
                Route::get('/sua-tin-tuc/{id}', [TinTucController::class, 'edit'])->name('suaTinTuc');
                Route::patch('/sua-tin-tuc/{id}', [TinTucController::class, 'update'])->name('suaTinTucPatch');
                Route::get('/chi-tiet-tin-tuc/{id}', [TinTucController::class, 'show'])->name('chiTietTinTuc');
                Route::get('/them-tuc-tin', [TinTucController::class, 'create'])->name('themTinTuc');
                Route::post('/them-tin-tuc', [TinTucController::class, 'store'])->name('themTinTucPost');
                Route::get('/xoa-tin-tuc/{id}', [TinTucController::class, 'destroy'])->name('xoaTinTuc');
                route::post('/timKiemTinTuc', [TinTucController::class, 'search'])->name('timKiemTinTuc');
                //load danh sách xoá mềm
            });
        });
        //Danh mục
        Route::prefix('danhmuc')->group(function () {
            Route::name('DanhMuc.')->group(function () {
                Route::get('/', [DanhMucController::class, 'index'])->name('dsDanhMuc');
                Route::get('/sua-danh-muc/{id}', [DanhMucController::class, 'edit'])->name('suaDanhMuc');
                Route::patch('/sua-danh-muc/{id}', [DanhMucController::class, 'update'])->name('suaDanhMucPatch');
                Route::get('/them-danh-muc', [DanhMucController::class, 'create'])->name('themDanhMuc');
                Route::post('/them-danh-muc', [DanhMucController::class, 'store'])->name('themDanhMucPost');
                Route::get('/xoa-danh-muc/{id}', [DanhMucController::class, 'destroy'])->name('xoaDanhMuc');
                //load danh sách xoá mềm
            });
        });
        //Người dùng
        Route::prefix('nguoidung')->group(function () {
            Route::name('NguoiDung.')->group(function () {
                Route::get('/', [NguoiDungController::class, 'index'])->name('dsNguoiDung');
                Route::get('/them-nguoi-dung', [NguoiDungController::class, 'create'])->name('themNguoiDung');
                Route::post('/them-nguoi-dung', [NguoiDungController::class, 'store'])->name('themNguoiDungPost');
                Route::get('/sua-nguoi-dung/{id}', [NguoiDungController::class, 'edit'])->name('suaNguoiDung');
                Route::patch('/sua-nguoi-dung/{id}', [NguoiDungController::class, 'update'])->name('suaNguoiDungPatch');
                Route::get('/xoa-nguoi-dung/{id}', [NguoiDungController::class, 'destroy'])->name('xoaNguoiDung');
                route::post('/tim-kiem-nguoi-dung', [NguoiDungController::class, 'search'])->name('timKiemNguoiDung');
                //load danh sách xoá mềm
            });
        });
    });

    Route::prefix('nguoidung')->group(function () {

        Route::name('NguoiDung.')->group(function () {
            Route::get('/',[TrangChuController::class ,'index'])->name('trangnguoidung');


         });

    });

    Route::prefix('timkiem')->group(function () {

        Route::name('TrangChu.')->group(function () {
           Route::get('/tincantim',[TrangChuController::class ,'tincantim'])->name('TinCanTim');
           Route::get('/tinnhatduoc',[TrangChuController::class ,'tinnhatduoc'])->name('TinNhatDuoc');
           Route::get('/tinthucung',[TrangChuController::class ,'tinthucung'])->name('TinThuCung');
           Route::get('/chitietbaiviet',[TrangChuController::class ,'chitietbaiviet'])->name('ChiTietBaiviet');
        });

    });
    Route::prefix('NguoiDung')->group(function () {

        Route::name('TrangChu.')->group(function () {
           Route::get('/canhbaoluadao',[TrangChuController::class ,'canhbaoluadao'])->name('CanhBaoLuaDao');
           Route::get('/cacmeovat',[TrangChuController::class ,'cacmeovat'])->name('CacMeoVat');
           Route::get('/dangbai',[TrangChuController::class ,'dangbai'])->name('DangBai');
           Route::get('baiviet/{id}',[TrangChuController::class ,'chitiet'])->name('ChiTiet');
           Route::get('tintuc/{id}',[TrangChuController::class ,'chiTietTinTuc'])->name('ChiTietTinTuc');
           Route::get('thongtinnguoidung/{id}',[TrangChuController::class,'thongtinnguoidung'])->name('ThongTinNguoiDung');
           Route::get('danhsachbaidang/{id}',[TrangChuController::class,'dsBaiDang'])->name('danhSachBaiDang');
        });

    });
     //Dang tin
     Route::prefix('dangtin')->group(function () {
        Route::name('DangTin.')->group(function () {
            Route::get('/sua-bai-viet/{id}', [BaiVietController::class, 'suaBaiViet'])->name('suaBaiViet');
            Route::patch('/sua-bai-viet/{id}', [BaiVietController::class, 'xuLySuaBaiViet'])->name('suaBaiVietPatch');
            Route::get('/them-bai-viet', [BaiVietController::class, 'themBaiViet'])->name('themBaiViet');
            Route::post('/them-bai-viet', [BaiVietController::class, 'xuLyThemBaiViet'])->name('themBaiVietPost');
            //load danh sách xoá mềm
        });
    });

});


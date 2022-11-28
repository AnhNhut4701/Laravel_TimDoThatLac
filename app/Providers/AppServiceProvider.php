<?php

namespace App\Providers;

use  App\Models\BaiViet;
use App\Models\HinhAnhTinTuc;
use App\Models\TinTuc;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Timstamps đổi hiển thị sang tiếng việt
        Carbon::setLocale('vi');

        //danh sách đồ được nhặt
        $dsTinNhatDo = BaiViet::all()->where('loai_bai_viet_id','=','1')->where('trang_thai','=','1');
        View::share('dsTinNhatDo', $dsTinNhatDo);

        //danh sách đồ mất
        $dsTinMatDo= BaiViet::all()->where('loai_bai_viet_id','=','2')->where('trang_thai','=','1');
        View::share('dsTinMatDo', $dsTinMatDo);

        // danh sách bài viết

        $dsBaiViet=BaiViet::all();
        View::share('dsBaiViet', $dsBaiViet);

        // chi tiết bài viết
        // $ctBaiViet = BaiViet::join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
        // ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
        // ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
        // ->select('nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'bai_viets.created_at', 'bai_viets.updated_at')
        // View::share('ctBaiViet', $ctBaiViet);


        $ctBaiViet = BaiViet::all();
        View::share('ctBaiViet', $ctBaiViet);
        //danh sách meo vat
        $dsMeoVat=TinTuc::all()->where('loai_tin_tuc_id','=','1');
        View::share('dsMeoVat', $dsMeoVat);

        // danh sách lừa đảo
        $dsLuaDao=TinTuc::all()->where('loai_tin_tuc_id','=','2');
        View::share('dsLuaDao', $dsLuaDao);

        //$dsBaiViet = BaiViet::all()->where('loai_bai_viet_id','=','1')->where('trang_thai','=','1');
        $dsTinTuc = TinTuc::all();
        $dsHinh = HinhAnhTinTuc::all();
        View::share('dsTinTuc', $dsTinTuc, 'dsHinh', $dsHinh);
    }

}

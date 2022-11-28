<?php

namespace App\Providers;

use App\Models\BaiViet;
use App\Models\HinhAnhTinTuc;
use App\Models\TinTuc;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $dsBaiViet = BaiViet::all();
        $dsTinTuc = TinTuc::all();
        $dsHinh = HinhAnhTinTuc::all();

        View::share('dsBaiViet', $dsBaiViet);
        View::share('dsTinTuc', $dsTinTuc, 'dsHinh', $dsHinh);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DanhMucSeeder::class);
        $this->call(LoaiTinTucSeeder::class);
        $this->call(LoaiBaiVietSeeder::class);
        $this->call(NguoiDungSeeder::class);
        $this->call(TinTucSeeder::class);
        $this->call(BaiVietSeeder::class);
        $this->call(HinhAnhBaiViet::class);
        $this->call(HinhAnhTinTuc::class);
    }
}

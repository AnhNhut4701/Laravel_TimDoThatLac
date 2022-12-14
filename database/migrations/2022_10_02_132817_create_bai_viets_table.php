<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nguoi_dung_id');
            $table->foreignId('loai_bai_viet_id');
            $table->foreignId('danh_muc_id');
            $table->string('tieu_de');
            $table->longText('noi_dung');
            $table->string('khu_vuc');
            //Trạng thái = 0 : Chưa duyệt, 1: Đã duyệt, 2: Từ chối duyệt
            $table->integer('trang_thai')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_viets');
    }
};

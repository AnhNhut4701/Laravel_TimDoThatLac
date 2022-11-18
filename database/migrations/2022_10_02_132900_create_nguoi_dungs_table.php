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
        Schema::create('nguoi_dungs', function (Blueprint $table) {
            $table->id();
            $table->string('tai_khoan')->unique();
            $table->string('mat_khau');
            $table->string('anh_dai_dien')->nullable();
            $table->string('ho_ten');
            $table->string('email')->unique()->nullable();
            $table->string('so_dien_thoai')->nullable();
            //Phân quyền = 0: Người dùng, 1: Admin
            $table->integer('phan_quyen')->default(0);
            //Trạng thái Email = 0: Chưa cập nhật, 1: Đã cập nhật
            $table->integer('trang_thai_email')->default(0)->nullable();
            //Trạng thái Số điện thoại = 0: Chưa cập nhật, 1: Đã cập nhật
            $table->integer('trang_thai_so_dien_thoai')->default(0)->nullable();
            //Trạng thái Người dùng = 0: Bình thường, 1: Khóa người dùng
            $table->integer('trang_thai_nguoi_dung')->default(0)->nullable();
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
        Schema::dropIfExists('nguoi_dungs');
    }
};

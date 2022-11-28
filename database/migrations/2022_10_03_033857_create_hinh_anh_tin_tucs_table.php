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
        Schema::create('hinh_anh_tin_tucs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tin_tuc_id');
            $table->string('ten_hinh_anh')->nullable();
            //Trạng thái = 0: Lỗi tải ảnh, 1: Bình thường
            $table->integer('trang_thai')->default(1);
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
        Schema::dropIfExists('hinh_anh_tin_tucs');
    }
};

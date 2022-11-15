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
            $table->string('tai_khoan',50)->unique();
            $table->string('mat_khau',100);
            $table->string('anh_dai_dien',255)->nullable();
            $table->string('ho_ten',40)->nullable();
            $table->string('email',254)->unique()->nullable();
            $table->string('so_dien_thoai',10)->nullable();
            $table->integer('phan_quyen')->default(0);
            $table->integer('trang_thai_ho_ten')->nullable();
            $table->integer('trang_thai_email')->nullable();
            $table->integer('trang_thai_so_dien_thoai')->nullable();
            $table->integer('trang_thai_nguoi_dung')->nullable();
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

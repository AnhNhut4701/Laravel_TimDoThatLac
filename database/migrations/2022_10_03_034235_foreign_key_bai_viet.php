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
        Schema::table('bai_viets', function (Blueprint $table) {
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dungs');
            $table->foreign('danh_muc_id')->references('id')->on('danh_mucs');
            $table->foreign('loai_bai_viet_id')->references('id')->on('loai_bai_viets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bai_viets', function (Blueprint $table) {
            //
        });
    }
};

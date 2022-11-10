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
        Schema::table('hinh_anh_bai_viets', function (Blueprint $table) {
            $table->foreign('bai_viet_id')->references('id')->on('bai_viets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hinh_anh_bai_viets', function (Blueprint $table) {
            //
        });
    }
};

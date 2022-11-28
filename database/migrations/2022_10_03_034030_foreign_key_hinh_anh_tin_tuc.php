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
        Schema::table('hinh_anh_tin_tucs', function (Blueprint $table) {
            $table->foreign('tin_tuc_id')->references('id')->on('tin_tucs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hinh_anh_tin_tucs', function (Blueprint $table) {
            //
        });
    }
};

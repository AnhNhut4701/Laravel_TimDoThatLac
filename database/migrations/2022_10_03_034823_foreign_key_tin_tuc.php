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
        Schema::table('tin_tucs', function (Blueprint $table) {
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dungs');
            $table->foreign('loai_tin_tuc_id')->references('id')->on('loai_tin_tucs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tin_tucs', function (Blueprint $table) {
            //
        });
    }
};

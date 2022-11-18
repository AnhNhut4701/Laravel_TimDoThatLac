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
        Schema::create('tin_tucs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nguoi_dung_id');
            $table->foreignId('loai_tin_tuc_id');
            $table->string('tieu_de');
            $table->longText('noi_dung');
            $table->string('khu_vuc');
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
        Schema::dropIfExists('tin_tucs');
    }
};

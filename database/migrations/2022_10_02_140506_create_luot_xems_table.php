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
        Schema::create('luot_xems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nguoi_dung_id');
            $table->foreignId('bai_viet_id');
            $table->foreignId('tin_tuc_id');
            $table->integer('luot_xem');
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
        Schema::dropIfExists('luot_xems');
    }
};

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
        Schema::table('lien_hes', function (Blueprint $table) {
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dungs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lien_hes', function (Blueprint $table) {
            //
        });
    }
};

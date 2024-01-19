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
        Schema::create('posisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('direktorat_id');
            $table->foreignId('divisi_id');
            $table->foreignId('unit_id');
            $table->foreignId('pic_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posisis');
    }
};
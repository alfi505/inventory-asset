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
        Schema::create('inventory_mice', function (Blueprint $table) {
            $table->string('id_mouse')->primary();
            $table->integer('no_mouse');
            $table->foreignId('merk_id');
            $table->foreignId('jenisperangkat_id');
            $table->string('serial_number');
            $table->string('model_mouse');
            $table->string('admin');
            $table->text('keterangan')->nullable();
            $table->foreignId('status_id');
            $table->date('tanggal_input');
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
        Schema::dropIfExists('inventory_mice');
    }
};
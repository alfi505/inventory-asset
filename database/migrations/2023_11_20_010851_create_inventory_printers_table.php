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
        Schema::create('inventory_printers', function (Blueprint $table) {
            $table->string('id_printer')->primary();
            $table->foreignId('merk_id');
            $table->foreignId('jenisperangkat_id');
            $table->string('serial_number');
            $table->string('model_printer');
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
        Schema::dropIfExists('inventory_printers');
    }
};
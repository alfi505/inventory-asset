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
        Schema::create('inventory_monitors', function (Blueprint $table) {
            $table->string('id_monitor')->primary();
            $table->foreignId('merk_id');
            $table->foreignId('jenisperangkat_id');
            $table->string('serial_number');
            $table->string('model_monitor');
            $table->string('admin');
            // $table->string('id_history')->unique();
            $table->text('keterangan')->nullable();
            $table->foreignId('status_id');
            $table->string('tanggal_input');
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
        Schema::dropIfExists('inventory_monitors');
    }
};
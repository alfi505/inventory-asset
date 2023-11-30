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
        Schema::create('inventory_speakers', function (Blueprint $table) {
            $table->string('id_speaker')->primary();
            $table->string('id_merk');
            $table->string('id_jenisperangkat');
            $table->string('serial_number');
            $table->string('model_speaker');
            $table->string('admin');
            $table->text('keterangan')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('inventory_speakers');
    }
};
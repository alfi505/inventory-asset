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
        Schema::create('inventory_cpus', function (Blueprint $table) {
            $table->string('id_cpu')->primary();
            $table->string('nama_komputer');
            $table->string('id_zona')->nullable();
            $table->string('id_spek')->nullable();
            $table->foreignId('jenisperangkat_id');
            $table->foreignId('merk_id');
            $table->string('kategori');
            $table->string('serial_number');
            $table->string('os');
            $table->string('processor');
            $table->string('mainboard');
            $table->string('ram');
            $table->string('rom');
            $table->string('vga');
            $table->string('soundcard')->nullable();
            $table->string('cdroom')->nullable();
            $table->string('nic')->nullable();
            $table->string('mac')->nullable();
            $table->string('casing');
            $table->string('admin');
            $table->date('tanggal_input');
            $table->foreignId('status_id');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('inventory_cpus');
    }
};
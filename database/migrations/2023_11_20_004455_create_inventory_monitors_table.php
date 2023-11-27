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
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->string('id_cpu')->unique();
            $table->string('id_merk')->unique();
            $table->string('id_jenisperangkat')->unique();
            $table->string('id_ip')->unique();
            $table->string('serial_number');
            $table->string('model_monitor');
            $table->string('id_posisi')->unique();
            $table->string('admin');
            $table->string('id_vendor')->unique();
            // $table->string('id_history')->unique();
            $table->text('keterangan')->nullable();
            $table->foreignId('status_id');
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
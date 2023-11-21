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
        Schema::create('inventory_keyboards', function (Blueprint $table) {
            $table->char('id_keyboard',200)->primary();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->char('id_cpu',200)->unique();
            $table->char('id_merk_keyboard',200)->unique();
            $table->char('id_jenis_perangkat',200)->unique();
            $table->char('id_ip',200)->unique();
            $table->string('serial_number');
            $table->string('model_keyboard');
            $table->string('admin');
            $table->char('id_vendor',200)->unique();
            $table->char('id_history',200)->unique();
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
        Schema::dropIfExists('inventory_keyboards');
    }
};
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
            $table->string('id_keyboard')->primary();
            $table->string('id_merk');
            $table->string('id_jenisperangkat');
            $table->string('serial_number');
            $table->string('model_keyboard');
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
        Schema::dropIfExists('inventory_keyboards');
    }
};
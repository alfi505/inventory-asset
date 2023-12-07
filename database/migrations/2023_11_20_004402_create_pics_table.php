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
        Schema::create('pics', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->string('kategori');
            $table->string('id_zona');
            $table->string('id_cpu')->nullable();
            $table->string('id_detailmonitorxpic')->nullable();
            $table->string('id_keyboard')->nullable();
            $table->string('id_mouse')->nullable();
            $table->string('id_printer')->nullable();
            $table->string('id_network')->nullable();
            $table->string('id_speaker')->nullable();
            $table->string('id_posisi');
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
        Schema::dropIfExists('pics');
    }
};
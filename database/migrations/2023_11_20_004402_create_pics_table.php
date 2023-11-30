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
            $table->string('id_pic')->primary();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->string('kategori');
            $table->string('id_zona');
            $table->string('id_cpu');
            $table->string('id_detailmonitorxpic');
            $table->string('id_keyboard');
            $table->string('id_mouse');
            $table->string('id_printer');
            $table->string('id_network');
            $table->string('id_speaker');
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

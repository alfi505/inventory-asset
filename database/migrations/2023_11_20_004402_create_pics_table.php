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
            $table->string('katregori');
            $table->string('id_zona')->unique();
            $table->string('id_cpu')->unique();
            $table->string('id_monitor')->unique();
            $table->string('id_keyboard')->unique();
            $table->string('id_mouse')->unique();
            $table->string('id_printer')->unique();
            $table->string('id_network')->unique();
            $table->string('id_speaker')->unique();
            $table->string('id_posisi')->unique();
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

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
            $table->char('id_pic',200)->primary();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->string('katregori');
            $table->char('id_zona',200)->unique();
            $table->char('id_cpu',200)->unique();
            $table->char('id_monitor',200)->unique();
            $table->char('id_keyboard',200)->unique();
            $table->char('id_mouse',200)->unique();
            $table->char('id_printer',200)->unique();
            $table->char('id_network',200)->unique();
            $table->char('id_speaker',200)->unique();
            $table->char('id_posisi',200)->unique();
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
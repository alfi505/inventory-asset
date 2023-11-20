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
            $table->char('id_pic',100)->primary();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->string('katregori');
            $table->char('id_zona',100)->unique();
            $table->char('id_cpu',100)->unique();
            $table->char('id_monitor',100)->unique();
            $table->char('id_keyboard',100)->unique();
            $table->char('id_mouse',100)->unique();
            $table->char('id_printer',100)->unique();
            $table->char('id_network',100)->unique();
            $table->char('id_speaker',100)->unique();
            $table->char('id_posisi',100)->unique();
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
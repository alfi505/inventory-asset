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
        Schema::create('detail_printer_x_p_i_c_s', function (Blueprint $table) {
            $table->string('id_detailprinterxpic')->primary();
            $table->foreignId('printer_id');
            $table->foreignId('pic_id');
            $table->foreignId('vendor_id');
            $table->foreignId('workstation_id');
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
        Schema::dropIfExists('detail_printer_x_pics');
    }
};
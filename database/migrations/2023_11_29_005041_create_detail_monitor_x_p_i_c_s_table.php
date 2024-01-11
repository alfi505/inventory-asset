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
        Schema::create('detail_monitor_x_p_i_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('monitor_id')->nullable();
            $table->foreign('monitor_id')->references('id_monitor')->on('inventory_monitors')->onDelete('cascade');
            $table->foreignId('pic_id')->constrained();
            $table->foreignId('vendor_id')->constrained();
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
        Schema::dropIfExists('detail_monitor_x_pics');
    }
};
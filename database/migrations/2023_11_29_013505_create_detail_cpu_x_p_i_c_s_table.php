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
        Schema::create('detail_cpu_x_p_i_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('cpu_id')->nullable();
            $table->foreign('cpu_id')->references('id_cpu')->on('inventory_cpus')->onDelete('cascade');
            $table->foreignId('pic_id')->constrained();
            $table->foreignId('vendor_id')->constrained();
            $table->foreignId('workstation_id')->nullable();
            $table->string('inventory_cpu_id_cpu');
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
        Schema::dropIfExists('detail_cpu_x_pics');
    }
};
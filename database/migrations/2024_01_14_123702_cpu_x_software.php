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
        Schema::create('CpuXSoftware', function (Blueprint $table) {
            $table->id();
            $table->string('cpu_id')->nullable();
            $table->foreign('cpu_id')->references('id_cpu')->on('inventory_cpus')->onDelete('cascade');
            $table->foreignId('software_id')->constrained();
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
        Schema::dropIfExists('CpuXSoftware');
    }
};
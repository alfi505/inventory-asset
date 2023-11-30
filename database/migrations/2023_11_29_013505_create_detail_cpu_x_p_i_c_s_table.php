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
        Schema::create('detail_cpu_x_pics', function (Blueprint $table) {
            $table->string('id_detailcpuxpic');
            $table->string('cpu_id');
            $table->string('pic_id');
            $table->string('vendor_id');
            $table->string('workstation_id');
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

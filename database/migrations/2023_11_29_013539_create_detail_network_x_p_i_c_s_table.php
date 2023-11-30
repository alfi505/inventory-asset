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
        Schema::create('detail_network_x_p_i_c_s', function (Blueprint $table) {
            $table->string('id_detailnetworkxpic');
            $table->string('network_id');
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
        Schema::dropIfExists('detail_network_x_pics');
    }
};
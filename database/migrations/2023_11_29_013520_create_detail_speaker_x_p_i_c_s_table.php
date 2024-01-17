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
        Schema::create('detail_speaker_x_p_i_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('speaker_id')->nullable();
            $table->foreign('speaker_id')->references('id_speaker')->on('inventory_speakers')->onDelete('cascade');
            $table->foreignId('pic_id')->constrained();
            $table->foreignId('vendor_id')->constrained();
            $table->foreignId('workstation_id')->nullable();
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
        Schema::dropIfExists('detail_speaker_x_pics');
    }
};
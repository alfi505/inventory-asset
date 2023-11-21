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
        Schema::create('inventory_cpus', function (Blueprint $table) {
            $table->char('id_cpu',200)->primary();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->char('zona',200)->nullable();
            $table->char('id_ip',200)->unique();
            $table->string('kategori');
            $table->string('serial_number');
            $table->string('os');
            $table->string('processor');
            $table->string('mainboard');
            $table->string('ram');
            $table->string('rom');
            $table->string('vga');
            $table->string('soundcard');
            $table->string('cdroom')->nullable();
            $table->string('nic')->nullable();
            $table->string('mac')->nullable();
            $table->string('casing');
            $table->char('id_vendor',200)->unique();
            $table->char('id_software',200)->unique();
            $table->date('tanggal_input');
            $table->string('status');
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
        Schema::dropIfExists('inventory_cpus');
    }
};

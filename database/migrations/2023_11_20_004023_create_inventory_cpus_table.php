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
            $table->id();
            $table->char('id_cpu',100)->unique();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->char('zona',100)->nullable();
            $table->char('id_ip',100)->unique();
            $table->string('kategori');
            $table->char('serial_number',100);
            $table->char('os',100);
            $table->char('processor',100);
            $table->char('mainboard',100);
            $table->char('ram',100);
            $table->char('rom',100);
            $table->char('vga',100);
            $table->char('soundcard',100);
            $table->char('cdroom',100);
            $table->char('nic',100);
            $table->char('mac',100);
            $table->char('casing',100);
            $table->char('id_vendor',100)->unique();
            $table->char('id_software',100)->unique();
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
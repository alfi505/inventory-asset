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
        Schema::create('inventory_monitors', function (Blueprint $table) {
            $table->id();
            $table->char('id_monitor',100)->unique();
            $table->string('nama_komputer');
            $table->string('nama_pic');
            $table->char('id_cpu',100)->unique();
            $table->char('id_merk_monitor',100)->unique();
            $table->char('id_jenis_perangkat',100)->unique();
            $table->char('id_ip',100)->unique();
            $table->char('serial_number',100);
            $table->char('model_monitor',100);
            $table->char('posisi',100);
            $table->string('admin');
            $table->char('id_vendor',100)->unique();
            $table->char('id_history',100)->unique();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('inventory_monitors');
    }
};

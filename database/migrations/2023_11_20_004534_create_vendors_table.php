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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id('id_vendor');
            $table->string('nama');
            $table->string('perusahaan');
            $table->string('jabatan');
            $table->text('alamat');
            $table->string('kota');
            $table->string('daerah');
            $table->integer('kode_pos');
            $table->float('no_telpon');
            $table->char('fax',200)->nullable();
            $table->text('tambahan')->nullable();
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
        Schema::dropIfExists('vendors');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boking', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no');
            $table->string('mobil');
            $table->string('plat');
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('harga');
            $table->string('denda');
            $table->string('pembayaran');
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
        Schema::dropIfExists('boking');
    }
}

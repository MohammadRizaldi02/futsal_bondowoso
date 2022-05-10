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
        Schema::create('_schedule', function (Blueprint $table) {
            $table->string('Nama Penyewa');
            $table->time('Jam', $precision = 0);
            $table->string('Durasi');
            $table->date('Tanggal');
            $table->string('Lapangan');
            $table->enum('Status', ['Booking', 'Belum']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_schedule');
    }
};

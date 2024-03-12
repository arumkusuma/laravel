<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('ID_Pesanan');
            $table->unsignedBigInteger('ID_Pelanggan');
            $table->date('Tanggal_Pesanan');
            $table->string('Status_Pesanan', 50);
            $table->timestamps();

            $table->foreign('ID_Pelanggan')->references('ID_Pelanggan')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};

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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('ID_Pembayaran');
            $table->unsignedBigInteger('ID_Pesanan');
            $table->string('Metode_Pembayaran', 50);
            $table->decimal('Total_Pembayaran', 10, 2);
            $table->date('Tanggal_Pembayaran');
            $table->timestamps();

            $table->foreign('ID_Pesanan')->references('ID_Pesanan')->on('pesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};

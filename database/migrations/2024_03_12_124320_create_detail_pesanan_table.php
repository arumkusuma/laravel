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
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->id('ID_Detail_Pesanan');
            $table->unsignedBigInteger('ID_Pesanan');
            $table->unsignedBigInteger('ID_Menu');
            $table->integer('Jumlah');
            $table->decimal('Total_Harga', 10, 2);
            $table->timestamps();

            $table->foreign('ID_Pesanan')->references('ID_Pesanan')->on('pesanan');
            $table->foreign('ID_Menu')->references('ID_Menu')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan');
    }
};

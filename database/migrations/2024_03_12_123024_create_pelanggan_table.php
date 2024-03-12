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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('ID_Pelanggan');
            $table->unsignedBigInteger('ID_Profil');
            $table->string('Nama_Pelanggan', 100);
            $table->string('Email', 100);
            $table->timestamps();

            $table->foreign('ID_Profil')->references('ID_Profil')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};

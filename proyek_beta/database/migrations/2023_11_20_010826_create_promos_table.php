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
        Schema::create('promos', function (Blueprint $table) {
            $table->string('id_kodepromo')->primary();
            $table->string('id_penjual');
            $table->string('kode_promo')->unique();
            $table->integer('nilai_promo');
            $table->char('status')->default(1); //status 1= aktif, 0= deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};

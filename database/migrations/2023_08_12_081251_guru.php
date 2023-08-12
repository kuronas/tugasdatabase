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
        Schema::create('tabelguru', function (Blueprint $table) {
            $table->integer('NIP');
            $table->string('Nama Guru');
            $table->string('Alamat');
            $table->date('Tanggal Lahir');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

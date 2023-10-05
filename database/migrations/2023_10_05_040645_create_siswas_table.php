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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nipd')->unique();
            $table->integer('nisn')->unique();
            $table->enum('jenis_kelamin',['l','p']);
            $table->string('kelas');
            $table->string('tempat_lahir');
            $table->dateTime('tanggal_lahir');
            $table->string('nik');
            $table->enum('agama',['kristen','katolik','budha','hindu','konghucu']);
            $table->text('alamat');
            $table->string('telepon');
            $table->string('nama_orangtua');
            $table->string('sekolah_asal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};

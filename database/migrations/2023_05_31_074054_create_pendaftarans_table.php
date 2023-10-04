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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained();
            $table->string('gender', 100)->nullable();
            $table->string('tmp_lahir', 100)->nullable();
            $table->date('tgl_lahir', 100)->nullable();
            $table->string('universitas', 150)->nullable();
            $table->string('jurusan', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('penyakit', 100)->nullable();
            $table->string('telepon_ortu', 100)->nullable();
            $table->string('gambar', 200)->nullable();
            $table->string('status', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};

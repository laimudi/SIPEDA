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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('gender', 50)->nullable();
            $table->string('tmp_lahir', 100)->nullable();
            $table->date('tgl_lahir', 100)->nullable();
            $table->string('sekolah', 150)->nullable();
            $table->string('universitas', 150)->nullable();
            $table->string('jurusan', 100)->nullable();
            $table->string('fakultas', 100)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('telepon', 100)->nullable();
            $table->string('gambar', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};

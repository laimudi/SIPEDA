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
        Schema::table('penguruss', function (Blueprint $table) {
            $table->unsignedBigInteger('bidang_id')->required()->after('nm_pengurus');
            $table->foreign('bidang_id')->references('id')->on('bidangs')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penguruss', function (Blueprint $table) {
            $table->dropForeign(['bidang_id']);
            $table->dropColumn('bidang_id');
        });
    }
};

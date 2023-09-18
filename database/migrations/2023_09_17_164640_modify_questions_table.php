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
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('file');
            $table->string('image')->nullable();
            // $table->renameColumn('file', 'image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // $table->renameColumn('image', 'file');
            $table->dropColumn('image');
            $table->string('file',255)->nullable();
        });
    }
};

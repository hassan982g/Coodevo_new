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
        Schema::table('portfolios', function (Blueprint $table) {
            $table->longText('excerpt')->nullable()->after('description');
            $table->longText('meta_keywords')->nullable()->after('excerpt');
            $table->longText('meta_description')->nullable()->after('meta_keywords');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('excerpt');
            $table->dropColumn('meta_keywords');
            $table->dropColumn('meta_description');
        });
    }
};

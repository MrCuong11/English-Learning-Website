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
        Schema::table('skills', function (Blueprint $table) {
            // Đổi tên cột name thành title
            $table->renameColumn('name', 'title');
            
            // Thêm cột imageUrl
            $table->string('imageUrl')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            // Đổi tên cột title về lại name
            $table->renameColumn('title', 'name');
            
            // Xóa cột imageUrl
            $table->dropColumn('imageUrl');
        });
    }
};

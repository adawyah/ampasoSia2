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
        Schema::create('tbladmin', function (Blueprint $table) {
            $table->id();
            $table->string('AdminName', 120);
            $table->string('UserName', 120)->unique();
            $table->bigInteger('MobileNumber')->nullable();
            $table->string('Email', 200)->unique();
            $table->string('Password', 200);
            $table->timestamp('AdminRegdate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbladmin');
    }
};

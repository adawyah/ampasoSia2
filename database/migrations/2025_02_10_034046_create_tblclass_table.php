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
        Schema::create('tblclass', function (Blueprint $table) {
            $table->id('class_id');
            $table->string('ClassName', 50);
            $table->string('Section', 20);
            $table->timestamp('CreationDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblclass');
    }
};

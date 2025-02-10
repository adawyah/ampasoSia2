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
        Schema::create('tblnotice', function (Blueprint $table) {
            $table->id();
            $table->mediumText('NoticeTitle');
            $table->unsignedBigInteger('ClassId'); // Define foreign key column
            $table->mediumText('NoticeMsg');
            $table->timestamp('CreationDate')->useCurrent();

            // Define foreign key properly
            $table->foreign('ClassId')->references('class_id')->on('tblclass')->onDelete('cascade');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblnotice');
    }
};

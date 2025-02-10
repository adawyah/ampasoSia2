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
        Schema::create('tblschedule', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->string('subject', 100);
            $table->time('time_start');
            $table->time('time_dismissed');
            $table->enum('day', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
            $table->year('year_enrolled');
            $table->timestamp('creation_date')->useCurrent();
            $table->unsignedBigInteger('class_id'); // Define the foreign key column
            $table->foreign('class_id')->references('class_id')->on('tblclass')->onDelete('cascade'); 
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblschedule');
    }
};

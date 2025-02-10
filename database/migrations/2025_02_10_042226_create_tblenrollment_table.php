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
        Schema::create('tblenrollment', function (Blueprint $table) {
            $table->id('enrollment_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('class_id');
            $table->year('year_enrolled');
            $table->enum('Status', ['New', 'Old']);
            $table->timestamp('created_at')->useCurrent();
            $table->string('enrollment_status', 50);
            $table->tinyInteger('deleted')->default(0);

            // Define foreign keys properly
            $table->foreign('student_id')->references('student_id')->on('tblstudent')->onDelete('cascade');
            $table->foreign('class_id')->references('class_id')->on('tblclass')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblenrollment');
    }
};

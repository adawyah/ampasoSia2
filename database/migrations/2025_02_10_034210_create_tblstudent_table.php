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
        Schema::create('tblstudent', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('student_number', 20)->unique();
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->integer('age');
            $table->date('birthdate');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('nationality', 50);
            $table->string('religion', 50)->nullable();
            $table->string('ethnicity', 50)->nullable();
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->string('guardian_name', 100)->nullable();
            $table->string('guardian_contact', 15)->nullable();
            $table->string('student_id_photo', 255)->nullable();
            $table->string('UserName', 50)->unique();
            $table->string('Password', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblstudent');
    }
};

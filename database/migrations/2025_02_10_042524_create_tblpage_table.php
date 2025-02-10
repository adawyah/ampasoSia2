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
        Schema::create('tblpage', function (Blueprint $table) {
            $table->id();
            $table->string('PageType', 200);
            $table->mediumText('PageTitle');
            $table->mediumText('PageDescription');
            $table->string('Email', 200)->unique();
            $table->bigInteger('MobileNumber')->nullable();
            $table->date('UpdatationDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblpage');
    }
};

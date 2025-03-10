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
        Schema::create('tblpublicnotice', function (Blueprint $table) {
            $table->id();
            $table->string('NoticeTitle', 200);
            $table->mediumText('NoticeMessage');
            $table->timestamp('CreationDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblpublicnotice');
    }
};

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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('body');
            $table->string('image');
         //   $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreignId('user_id')->refereces('id')->on('users')->nullOnDelete();
          //  $table->unsignedBigInteger('category_id')->nullable();
            $table->foreignId('category_id')->refereces('id')->on('categories')->nullOnDelete();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

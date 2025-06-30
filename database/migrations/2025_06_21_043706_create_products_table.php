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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDeleteCascade();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->nullOnDelete();
            $table->string('sub');
            $table->text('story');
            $table->string('image');
            $table->integer('likes')->default(0);
            $table->integer('total_likes')->nullable();
            $table->integer('views')->default(0);
            $table->string('link')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

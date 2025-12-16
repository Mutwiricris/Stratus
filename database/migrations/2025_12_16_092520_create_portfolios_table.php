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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tagline');
            $table->text('description');
            $table->text('challenge')->nullable();
            $table->text('solution')->nullable();
            $table->json('features'); // Array of feature objects
            $table->json('technologies'); // Array of tech stack
            $table->json('metrics')->nullable(); // Performance metrics
            $table->string('category'); // web, mobile, fintech, etc
            $table->string('client')->nullable();
            $table->string('industry')->nullable();
            $table->date('completed_at')->nullable();
            $table->string('url')->nullable();
            $table->string('app_store_url')->nullable();
            $table->string('play_store_url')->nullable();
            $table->string('featured_image')->nullable();
            $table->json('gallery')->nullable(); // Array of images
            $table->json('testimonial')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

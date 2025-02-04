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
            $table->bigInteger('source_id')->nullable()->index();
            $table->bigInteger('author_id')->nullable()->index();
            $table->bigInteger('category_id')->nullable()->index();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('url')->nullable();
            $table->string('url_source')->nullable();
            $table->string('url_filename')->nullable();
            $table->text('url_directory')->nullable();
            $table->text('url_path')->nullable();
            $table->bigInteger('published_by_id')->nullable()->index();
            $table->timestamp('published_at')->nullable();
            $table->text('context')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->timestamps();
            $table->softDeletes();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('excerpt');
            $table->string('featured_image');
            $table->string('featured_image_alt');
            $table->text('description');
            $table->text('website_url');
            $table->text('github_url');
            $table->text('context');
            $table->text('result');
            $table->json('images');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

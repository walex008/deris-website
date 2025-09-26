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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('sub_heading');
            $table->text('short_description');
            $table->string('banner_image');
            $table->text('content');
            $table->string('mission_title');
            $table->string('mission_summary');
            $table->text('mission_content');
            $table->string('mission_image');
            $table->string('vision_title');
            $table->string('vision_summary');
            $table->text('vision_content');
            $table->string('vision_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};

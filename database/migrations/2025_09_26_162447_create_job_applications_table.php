<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('career_id'); // Reference to your career page
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other', 'prefer_not_to_say'])->nullable();

            // Professional Information
            $table->string('current_position')->nullable();
            $table->string('current_company')->nullable();
            $table->decimal('expected_salary', 10, 2)->nullable();
            $table->string('notice_period')->nullable();
            $table->enum('employment_type', ['full_time', 'part_time', 'contract', 'internship']);

            // Education
            $table->json('education'); // Store education as JSON

            // Experience
            $table->json('work_experience'); // Store work experience as JSON

            // Skills
            $table->json('skills'); // Store skills as JSON
            $table->json('languages')->nullable(); // Store languages as JSON

            // Files
            $table->string('resume_path')->nullable();
            $table->string('cover_letter_path')->nullable();
            $table->json('portfolio_links')->nullable();

            // Additional Information
            $table->text('why_join_company')->nullable();
            $table->text('additional_information')->nullable();
            $table->boolean('willing_to_relocate')->default(false);
            $table->boolean('has_valid_work_permit')->default(true);

            // Application Status
            $table->enum('status', ['pending', 'reviewing', 'shortlisted', 'interviewed', 'rejected', 'hired'])->default('pending');
            $table->text('notes')->nullable(); // For HR notes

            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');

            // Add indexes
            $table->index(['career_id', 'status']);
            $table->index('email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};

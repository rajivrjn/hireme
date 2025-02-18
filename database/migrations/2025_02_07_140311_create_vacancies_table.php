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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();  // For SEO-friendly URLs
            $table->text('description');
            $table->unsignedBigInteger('company_id');  // Foreign key to companies table
            $table->string('location')->nullable();
            $table->string('job_category');
            $table->string('job_status');  // e.g., open, closed, pending
            $table->string('experiences'); // e.g., 'Entry Level', 'Mid Level', etc.
            $table->string('salary_grid'); // e.g., '50k-60k', 'Negotiable', etc.
            $table->unsignedInteger('views')->default(0);  // Count views
            $table->timestamp('date_created')->useCurrent(); // Timestamp when job is created
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};

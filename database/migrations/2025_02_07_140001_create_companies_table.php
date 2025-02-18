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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');               // Contact person first name
            $table->string('last_name');                // Contact person last name
            $table->string('company_name');             // Name of the company
            $table->string('sector');                   // Sector the company operates in
            $table->enum('activities', ['local', 'offshore']); // Company activities: local or offshore
            $table->string('address');                  // Physical address
            $table->string('city');                     // City
            $table->string('office_phone')->nullable(); // Office phone number (nullable)
            $table->string('mobile')->nullable();       // Mobile phone number (nullable)
            $table->string('fax')->nullable();          // Fax number (nullable)
            $table->string('email')->unique();          // Unique email
            $table->string('BRN')->unique();            // Business Registration Number (unique)
            $table->string('company_size');             // Size of the company (e.g., Small, Medium, Large)
            $table->timestamps();                       // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

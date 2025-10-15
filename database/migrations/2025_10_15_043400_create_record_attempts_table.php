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
       Schema::create('application_forms', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('mobile', 15);
        $table->date('dob');
        $table->enum('gender', ['Male', 'Female', 'Other']);
        $table->string('email')->unique();
        $table->string('occupation')->nullable();
        $table->text('address');
        $table->longText('description');
        $table->json('evidence_files')->nullable(); // store multiple uploaded file paths
        $table->string('google_drive_link')->nullable();
        $table->boolean('terms')->default(0);
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_forms');
    }
};

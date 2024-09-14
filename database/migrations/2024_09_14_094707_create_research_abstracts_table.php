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
        Schema::create('research_abstracts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('adviser');
            $table->string('course');
            $table->string('major');
            $table->string('academic_year');
            $table->string('publication');
            $table->longtext('description');
            $table->string('file_name');
            $table->string('path'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_abstracts');
    }
};

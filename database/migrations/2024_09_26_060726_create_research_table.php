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
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('adviser');
            $table->string('course');
            $table->string('major');
            $table->string('academic_year');
            $table->string('publication');
            $table->longtext('description');
            $table->string('abstract_file_name');
            $table->string('abstract_path'); 
            $table->string('research_paper_file_name');
            $table->string('research_paper_path'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research');
    }
};

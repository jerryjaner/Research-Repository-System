<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $table ='research';

    protected $fillable = [

        'title',
        'author',
        'adviser',
        'course',
        'major',
        'academic_year',
        'publication',
        'description',
        'abstract_file_name',
        'abstract_path',
        'research_paper_file_name',
        'research_paper_path',
        
    ];
}

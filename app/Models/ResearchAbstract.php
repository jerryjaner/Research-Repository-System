<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchAbstract extends Model
{
    use HasFactory;

    protected $table ='research_abstracts';

    protected $fillable = [

        'title',
        'author',
        'adviser',
        'course',
        'major',
        'academic_year',
        'publication',
        'description',
        'file_name',
        'path',
        
    ];
}

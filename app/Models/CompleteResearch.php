<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompleteResearch extends Model
{
    use HasFactory;

    protected $table ='complete_research';

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

<?php
namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class ResearchAbstractValidator
{
    public static function validate(array $data){
        return Validator::make($data, [
           
            'title' => 'required',
            'author' => 'required',
            'adviser' => 'required',
            'course' => 'required',
            'major' => 'required',
            'academic_year' => 'required',
            'publication' => 'required',
            'description' => 'required',
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
           
        ]);
    }
}

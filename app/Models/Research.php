<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $table = "research_and_development";
    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
        'image',
        'button_name',
        'banner_image',
        'problem',
        'problem_desc',
        'solution_title',
        'features_title',
        'solution_image',
        'solution_data',
        'solution_desc',
        'features_data',
        'works_data',
        'works_title',
        'works_desc',
        'works_image',
    ];
}

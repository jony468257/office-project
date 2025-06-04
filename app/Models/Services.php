<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";
    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
        'image',
        'banner_image',
        'benefits_one_en',
        'benefits_two_en',
        'benefits_three_en',
        'benefits_four_en',
        'benefits_five_en',
        'benefits_six_en',
        'benefits_one_bn',
        'benefits_two_bn',
        'benefits_three_bn',
        'benefits_four_bn',
        'benefits_five_bn',
        'benefits_six_bn',
    ];
}

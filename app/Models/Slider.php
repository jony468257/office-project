<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "sliders";
    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
        'image'
    ];


}

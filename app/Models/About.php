<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
        'image',
        'row_status',
    ];
}

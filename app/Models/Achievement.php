<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = "achievements";
    protected $fillable = [
        'title_en',
        'title_bn',
        'contests_en',
        'contests_bn',
        'description_en',
        'description_bn',
        'image',
        'row_status',
    ];
}

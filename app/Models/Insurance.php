<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = "insurances";
    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
        'attachment',
        'row_status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $table = "area_of_activitys";
    protected $fillable = [
        'name_en',
        'name_bn',
        'description_en',
        'description_bn',
        'image',
        'row_status'
    ];

}

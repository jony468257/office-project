<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    protected $table = "mission_visions";
    protected $fillable = [
        'title_en',
        'title_bn',
        'type',
        'description_en',
        'description_bn',
        'image'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $table = "pricing";
    protected $fillable = [
        'title_en',
        'title_bn',
        'sub_title_en',
        'sub_title_bn',
        'attachment',
        'price_en',
        'price_bn',
        'url',
        'row_status',
    ];
}

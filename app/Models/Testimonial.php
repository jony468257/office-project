<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = "testimonials";
    protected $fillable = [
        'name_en',
        'name_bn',
        'farm_name_en',
        'farm_name_bn',
        'address_en',
        'address_bn',
        'image',
        'description_en',
        'description_bn',
        'row_status',
    ];
}

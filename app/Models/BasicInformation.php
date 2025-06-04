<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    protected $table = "basic_information";
    protected $fillable = [
        'name_en',
        'name_bn',
        'favicon',
        'logo',
        'description_en',
        'description_bn',
        'address',
        'email',
        'copyrights',
        'row_status',
    ];

}

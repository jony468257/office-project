<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CattleRegistration extends Model
{
    protected $table = "cattle_registrations";
    protected $fillable = ['name', 'email', 'mobile', 'address', 'cattle', 'package','description'];
}

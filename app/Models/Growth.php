<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Growth extends Model
{
    use HasFactory;
    protected $fillable = ['date_of_visit','age','jin','undur','bmi','c_id'];
}

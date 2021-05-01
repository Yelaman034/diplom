<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineRegInfo extends Model
{
    use HasFactory;
    protected $fillable = ['vaccine_name','weigth','height','scheduled_date','give_date','registration_date','vaccine_id','child_id'];
}

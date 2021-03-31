<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
    protected $fillable = ['ovog','ner','r_number','date_of_birth','hvis','p_id'];
}

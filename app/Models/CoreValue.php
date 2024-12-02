<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreValue extends Model
{
    use HasFactory;
    protected $fillable = [
        'core_values', 
        'core_values_img', 
        'mission', 
        'mission_img', 
        'vision', 
        'vision_img' 
    ];
}

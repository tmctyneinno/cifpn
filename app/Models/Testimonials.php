<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'image', 
        'author_name',
        'author_title',
    ];

    public $timestamps = true;
}
 
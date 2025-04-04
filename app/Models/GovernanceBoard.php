<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GovernanceBoard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content', 
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title); 
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->title); 
        });
    }
}

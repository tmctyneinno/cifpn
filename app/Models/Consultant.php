<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{ 
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'solution_id', 'calendar_date', 'timeslot' 
    ];

    public function solutionInfo() 
    {
        return $this->belongsTo(Service::class, 'solution_id', 'id');
    }
}  

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_email',
        'phone_number',
        'qualification', 
        'membership_category',
        'certification_path',
        'academic_qualifications_path',
        'work_experience_path',
        'professional_certifications_path',
        'identification_path',
        'applicant_status', 
        'payment_option',
        'fee_acknowledged',
        'reference', 
        'amount', 
        'payment_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'user_id',
        'user_email',
        'amount',
        'status',
        'transaction_type',
        'payment_instrument',
        'transaction_reference', 
        'order_no',
        'currency',
    ];

    public function application()
    {
        return $this->belongsTo(ApplicationForm::class);
    }
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

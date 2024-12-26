<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    const PAYMENT_STATUS_NO_PAYMENT_REQUIRED = 'GRATUIT';
    const PAYMENT_STATUS_PAID = 'PAYE';
    const PAYMENT_STATUS_UNPAID = 'NON PAYE';

    const STATUS_ACTIVE = 'ACTIF';
    const STATUS_DISABLED = 'INACTIF';
    const STATUS_PENDING = 'EN ATTENTE';

    protected $fillable = [
        'userId',
        'planId',
        'period',
        'startDate',
        'endDate',
        'amount',
        'paymentStatus',
        'status',
        'sessionId'
    ];

    public function subscriber()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'planId', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', Subscription::STATUS_ACTIVE);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $cardCount
 * @property int $pockectCount
 * @property int $transactionCount
 * @property-read User $subscriber
 * @property-read Plan $plan
 */
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
        'sessionId',
        'cardCount',
        'pockectCount',
        'transactionCount',
    ];

    /** @return BelongsTo<User, $this> */
    public function subscriber(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    /** @return BelongsTo<Plan, $this> */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'planId', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', Subscription::STATUS_ACTIVE);
    }

    public function canAddMoreCards(): bool
    {
        // Vérifie si le nombre actuel de cartes est inférieur au nombre maximum autorisé par le plan
        return $this->cardCount < $this->plan->maxCards;
    }

    public function canAddMorePockets(): bool
    {
        // Vérifie si le nombre actuel de poche est inférieur au nombre maximum autorisé par le plan
        return $this->pockectCount < $this->plan->maxPocket;
    }

    //count total subscription
    public static function totalSubscriptions()
    {
        return Subscription::where('status', Subscription::STATUS_ACTIVE)->count();
    }
}

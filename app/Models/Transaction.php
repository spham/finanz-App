<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property string $type
 * @property float $amount
 * @property string|null $source_type
 * @property string|null $destination_type
 * @property-read Card|Pocket|null $source
 * @property-read Card|Pocket|null $destination
 */
class Transaction extends Model
{
    const TYPE_TRANSACTION_INCOME = 'Revenu';

    const TYPE_TRANSACTION_EXPENSE = 'Depense';

    const TYPE_TRANSACTION_TRANSFER = 'Transfert';

    protected $fillable = [
        'type',
        'amount',
        'source_id',
        'destination_id',
        'description',
        'userId',
    ];

    public static function getTypes()
    {
        return [
            self::TYPE_TRANSACTION_INCOME,
            self::TYPE_TRANSACTION_EXPENSE,
            self::TYPE_TRANSACTION_TRANSFER,
        ];
    }

    /** @return BelongsTo<User, $this> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    /** @return MorphTo<Model, $this> */
    public function source(): MorphTo
    {
        return $this->morphTo();
    }

    /** @return MorphTo<Model, $this> */
    public function destination(): MorphTo
    {
        return $this->morphTo();
    }
}

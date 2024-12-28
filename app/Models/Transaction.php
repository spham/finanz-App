<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'userId'
    ];

    public static function getTypes()
    {
        return [
            self::TYPE_TRANSACTION_INCOME,
            self::TYPE_TRANSACTION_EXPENSE,
            self::TYPE_TRANSACTION_TRANSFER,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function source()
    {
        return $this->morphTo();
    }

    public function destination()
    {
        return $this->morphTo();
    }
}

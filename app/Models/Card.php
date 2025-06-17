<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public const CARD_TYPE_VISA = 'VISA';

    public const CARD_TYPE_MASTERCARD = 'MASTERCARD';

    public const CARD_TYPE_AMEX = 'American Express';

    public const CARD_TYPE_UNIONPAY = 'UnionPay';

    protected $fillable = [
        'name',
        'type',
        'cardNumber',
        'cvv',
        'expiry_date',
        'balance',
        'userId',
    ];

    // protected $casts = [
    //     'expiry_date' => 'date'
    // ];

    public function owner()
    {
        $this->belongsTo(User::class, 'userId', 'id');
    }

    public static function getCardTypes()
    {
        return [
            self::CARD_TYPE_VISA,
            self::CARD_TYPE_MASTERCARD,
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_UNIONPAY,
        ];
    }

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($card) {
            $card->balance = rand(0, 999999);
        });
    }
}

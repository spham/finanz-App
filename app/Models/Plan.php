<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public const MONTHY_DURATION = 'Monthly';

    public const YEARLY_DURATION = 'Yearly';

    public const FREE_ACCESS = 'FREE';

    protected $fillable = [
        'name',
        'price',
        'duration',
        'maxCards',
        'maxPocket',
        'maxTransaction',
    ];

    public static function getDurationValues()
    {
        return [
            self::YEARLY_DURATION => 'ANNUEL',
            self::MONTHY_DURATION => 'MENSUEL',
            self::FREE_ACCESS => 'GRATUIT',
        ];
    }
}

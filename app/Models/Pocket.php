<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pocket extends Model
{
    protected $fillable = [
        'name',
        'balanceGoal',
        'dueDate',
        'balance',
        'progression',
        'isBlocked',
        'userId'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function calculateProgression()
    {
        if ($this->balanceGoal >= 0 || $this->balance >= 0) {

            $this->progression = round(min(($this->balance / $this->balanceGoal) * 100, 100), 2); // Limiter à 100% et arrondir
        }

    }
}

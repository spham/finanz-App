<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'image', //Si ca casse c'est ca
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function imageUrl()
    {
        return Storage::url($this->image);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'userId', 'id');
    }

    public function activeSubscription()
    {
        return $this->subscriptions()
            ->where('status', Subscription::STATUS_ACTIVE)
            ->first();
    }

    public function cards()
    {
        return $this->hasMany(Card::class, 'userId', 'id');
    }

    public function pockets()
    {
        return $this->hasMany(Pocket::class, 'userId', 'id');
    }
}

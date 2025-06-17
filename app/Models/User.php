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
        'role',
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
        //put condition to check if the image is null or not then return the image : https://via.placeholder.com/150
        return Storage::url($this->image);
    }

    // public function imageUrl()
    // {
    //     return $this->image ? Storage::url($this->image) : asset('images/default-user.png');
    // }

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

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'userId', 'id');
    }

    //calculate the total amount of money in the user's pockets and cards
    // public function totalAmount()
    // {
    //     $total = 0;
    //     foreach ($this->pockets as $pocket) {
    //         $total += $pocket->balance;
    //     }

    //     foreach ($this->cards as $card) {
    //         $total += $card->balance;
    //     }

    //     return $total;
    // }

    public function totalAmount()
    {
        return $this->pockets()->sum('balance') + $this->cards()->sum('balance');
    }

    //calculate current month's expenses
    public function currentMonthExpenses()
    {
        // $currentMonthExpenses = 0;

        // foreach ($this->transactions as $transaction) {
        //     if ($transaction->type == Transaction::TYPE_TRANSACTION_EXPENSE && $transaction->created_at->format('Y-m') == now()->format('Y-m')) {
        //         $currentMonthExpenses += $transaction->amount;
        //     }
        // }

        // return $currentMonthExpenses;

        return $this->transactions()
            ->where('type', Transaction::TYPE_TRANSACTION_EXPENSE)
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->sum('amount');
    }

    //calculate current month's incomes
    public function currentMonthIncomes()
    {
        // $currentMonthIncomes = 0;

        // foreach ($this->transactions as $transaction) {
        //     if ($transaction->type == Transaction::TYPE_TRANSACTION_INCOME && $transaction->created_at->format('Y-m') == now()->format('Y-m')) {
        //         $currentMonthIncomes += $transaction->amount;
        //     }
        // }

        // return $currentMonthIncomes;

        return $this->transactions()
            ->where('type', Transaction::TYPE_TRANSACTION_INCOME)
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->sum('amount');
    }

    //calculate monthly expenses amount for the current year
    public function monthlyExpenses()
    {
        $monthlyExpenses = [];

        foreach ($this->transactions as $transaction) {
            if ($transaction->type == Transaction::TYPE_TRANSACTION_EXPENSE && $transaction->created_at->format('Y') == now()->format('Y')) {
                $month = $transaction->created_at->format('Y-m');
                if (! isset($monthlyExpenses[$month])) {
                    $monthlyExpenses[$month] = 0;
                }
                $monthlyExpenses[$month] += $transaction->amount;
            }
        }

        return $monthlyExpenses;
    }

    //current Month expenses by description => amount
    public function currentMonthExpensesByDescription()
    {
        // $currentMonthExpenses = [];

        // foreach ($this->transactions as $transaction) {
        //     if ($transaction->type == Transaction::TYPE_TRANSACTION_EXPENSE && $transaction->created_at->format('Y-m') == now()->format('Y-m')) {
        //         if (!isset($currentMonthExpenses[$transaction->description])) {
        //             $currentMonthExpenses[$transaction->description] = 0;
        //         }
        //         $currentMonthExpenses[$transaction->description] += $transaction->amount;
        //     }
        // }

        // return $currentMonthExpenses;

        // dd($this->transactions()
        //     ->selectRaw('description, SUM(amount) as total')
        //     ->where('type', Transaction::TYPE_TRANSACTION_EXPENSE)
        //     ->whereYear('created_at', now()->year)
        //     ->whereMonth('created_at', now()->month)
        //     ->groupBy('description')
        //     ->pluck('total', 'description'));

        return $this->transactions()
            ->selectRaw('description, SUM(amount) as total')
            ->where('type', Transaction::TYPE_TRANSACTION_EXPENSE)
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->groupBy('description')
            ->pluck('total', 'description')->toArray();
    }

    //current Month incomes by description => amount
    public function currentMonthIncomesByDescription()
    {
        // $currentMonthIncomes = [];

        // foreach ($this->transactions as $transaction) {
        //     if ($transaction->type == Transaction::TYPE_TRANSACTION_INCOME && $transaction->created_at->format('Y-m') == now()->format('Y-m')) {
        //         if (!isset($currentMonthIncomes[$transaction->description])) {
        //             $currentMonthIncomes[$transaction->description] = 0;
        //         }
        //         $currentMonthIncomes[$transaction->description] += $transaction->amount;
        //     }
        // }

        // return $currentMonthIncomes;

        return $this->transactions()
            ->selectRaw('description, SUM(amount) as total')
            ->where('type', Transaction::TYPE_TRANSACTION_INCOME)
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->groupBy('description')
            ->pluck('total', 'description')->toArray();
    }

    //calculate incomes amount by month
    public function monthlyIncomes()
    {
        $monthlyIncomes = [];

        foreach ($this->transactions as $transaction) {
            if ($transaction->type == Transaction::TYPE_TRANSACTION_INCOME && $transaction->created_at->format('Y') == now()->format('Y')) {
                $month = $transaction->created_at->format('Y-m');
                if (! isset($monthlyIncomes[$month])) {
                    $monthlyIncomes[$month] = 0;
                }
                $monthlyIncomes[$month] += $transaction->amount;
            }
        }

        return $monthlyIncomes;
    }

    //proges des poches : name => progress %
    public function pocketsProgress()
    {
        $pocketsProgress = [];

        foreach ($this->pockets()->latest()->take(3)->get() as $pocket) {
            $pocketsProgress[$pocket->name] = $pocket->progression;
        }

        return $pocketsProgress;
    }
}

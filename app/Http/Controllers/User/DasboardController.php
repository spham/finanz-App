<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DasboardController extends Controller
{
    public function __construct(private ?User $user)
    {
        $this->user = Auth::user();

    }

    public function index()
    {

        return view('pages.users.index', [
            'totalBalance' => $this->user->totalAmount(),
            'currentMonthExpenses' => $this->user->currentMonthExpenses(),
            'currentMonthIncome' => $this->user->currentMonthIncomes(),
            'monthlyExpenses' => $this->user->monthlyExpenses(),
            'monthlyIncomes' => $this->user->monthlyIncomes(),
            'lastTransactions' => $this->user->transactions()->latest()->take(3)->get(),
            'lastPockets' => $this->user->pockets()->latest()->take(3)->get(),
            'latestCard' => $this->user->cards()->latest()->first(),
        ]);
    }
}

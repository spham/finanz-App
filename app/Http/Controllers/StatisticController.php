<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StatisticController extends Controller
{
    public function __construct(private ?User $user)
    {
        $this->user = Auth::user();
    }

    public function index()
    {
        // dd($this->user->currentMonthExpensesByDescription());
        return view('pages.users.stats', [
            'monthlyExpenses' => $this->user->monthlyExpenses(),
            'monthlyIncomes' => $this->user->monthlyIncomes(),
            'currentMonthExpenses' => $this->user->currentMonthExpensesByDescription(),
            'currentMonthIncomes' => $this->user->currentMonthIncomesByDescription(),
            'pocketProgression' => $this->user->pocketsProgress(),
        ]);
    }
}

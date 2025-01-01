<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.admin.index', [
            'totalUsers' => User::where('role', 'customer')->count(),
            'totalTransactions' => Transaction::count(),
            'totalRevenue' => Subscription::sum('amount'),
            'totalSubscriptions' => Subscription::count(),
            'activeSubscriptions' => Subscription::totalSubscriptions(),
            'cuurentMonthRevenue' => Subscription::whereMonth('created_at', now()->month)->sum('amount'),
            //last 3 subscriptions
            'latestSubscriptions' => Subscription::with('subscriber')->latest()->take(3)->get(),
        ]);
    }
}

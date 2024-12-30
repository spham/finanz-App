<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index()
    {
        return view('pages.admin.transaction.index', [
            'transactions' => Transaction::orderByDesc('created_at')->get()
        ]);
    }
}

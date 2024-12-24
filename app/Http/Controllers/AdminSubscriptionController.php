<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSubscriptionController extends Controller
{
    public function index()
    {
        return view('pages.admin.subscription.index');
    }
}

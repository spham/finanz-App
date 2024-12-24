<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('pages.users.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('pages.admin.users.index', [
            'users' => User::where('role', '=', 'customer')->orderByDesc('created_at')->get(),
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'Utilisateur supprime avec succes');
    }
}

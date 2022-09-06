<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        return Inertia::render('Dashboard');
    }

    public function getUsers(Request $request)
    {
        $users = User::all();
        return Inertia::render('Users/view_users', ['users' => $users]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard')
            ->with('task_lists', auth()->user()->taskLists->sortByDesc('id'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show user task list
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('dashboard')
            ->with('task_lists', auth()->user()->taskLists->sortByDesc('id'));
    }
}

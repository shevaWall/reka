<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TaskListController extends Controller
{
    /**
     * return view for task lists for user
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $taskLists = auth()->user()->taskLists->sortByDesc('id');

        return view('components.task-list.wrapper-list-of-taskList')
            ->with('task_lists', $taskLists);
    }

    /**
     * return view for task list by task list id
     * @param TaskList $taskList_id
     * @return Application|Factory|View
     */
    public function show(TaskList $taskList_id): View|Factory|Application
    {
        return view('components.task-list.item-of-list-of-taskList')
            ->with('task_list', $taskList_id);
    }
}

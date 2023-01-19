<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    public function index()
    {
        $taskLists = auth()->user()->taskLists->sortByDesc('id');

        return view('components.task-list.wrapper-list-of-taskList')
            ->with('task_lists', $taskLists);
    }

    public function show(TaskList $taskList_id)
    {
        return view('components.task-list.item-of-list-of-taskList')
            ->with('task_list', $taskList_id);
    }
}

<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskList\DestroyRequest;
use App\Http\Requests\TaskList\PatchRequest;
use App\Http\Requests\TaskList\StoreRequest;
use App\Models\Pivot_TasklistAndUser;
use App\Models\TaskList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TaskListService extends Controller
{
    public function store(StoreRequest $request)
    {
        $taskList = TaskList::create([
            'name' => $request->name,
        ]);

        Pivot_TasklistAndUser::create([
            'task_lists_id' => $taskList->id,
            'user_id' => auth()->user()->id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'New list created',
            'taskList_id' => $taskList->id,
        ]);
    }

    public function destroy(DestroyRequest $request)
    {
        TaskList::destroy($request->id);
        Pivot_TasklistAndUser::where('task_lists_id', $request->id)->delete();

        return response()->json([
            'status' => '200',
            'message' => 'deleted',
        ]);
    }

    public function patch(PatchRequest $request)
    {
        TaskList::where('id', $request->taskList_id)
            ->update([
                'name' => $request->name,
            ]);
    }
}

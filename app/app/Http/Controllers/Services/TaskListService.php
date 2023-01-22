<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskList\PatchRequest;
use App\Http\Requests\TaskList\StoreRequest;
use App\Models\Pivot_TasklistAndUser;
use App\Models\TaskList;

class TaskListService extends Controller
{
    /**
     * Store new Task list
     * @param StoreRequest $request
     * @return void
     */
    public function store(StoreRequest $request): void
    {
        $taskList = TaskList::create([
            'name' => $request->name,
        ]);

        Pivot_TasklistAndUser::create([
            'task_lists_id' => $taskList->id,
            'user_id' => auth()->user()->id,
        ]);
    }

    /**
     * Delete task list
     * @param TaskList $taskList
     * @return void
     */
    public function destroy(TaskList $taskList): void
    {
        Pivot_TasklistAndUser::where('task_lists_id', $taskList->id)->delete();
        $taskList->delete();

        ListItemService::deleteAllByTaskListId($taskList);
    }

    /**
     * Update task list
     * @param PatchRequest $request
     * @return void
     */
    public function patch(PatchRequest $request): void
    {
        TaskList::where('id', $request->taskList_id)
            ->update([
                'name' => $request->name,
            ]);
    }
}

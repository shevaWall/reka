<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TagController;
use App\Http\Requests\ListItem\CheckboxRequest;
use App\Http\Requests\ListItem\StoreRequest;
use App\Models\ListItem;
use App\Models\TaskList;
use Illuminate\Http\JsonResponse;

class ListItemService extends Controller
{
    public function store(StoreRequest $request)
    {
        //        todo: вынести проверку в request
        if (!auth()->user()->isOwnerOfTaskList($request->task_list_id)) {
            return response()->json([
                'status' => '403',
                'message' => 'Not for You',
            ], 403);
        }

        $img_path = ($request->file('file'))
            ? ImageStorageService::store($request->file('file'))
            : "";

        if ($request->ajax_method == "PATCH") {
//            fix problem with send formData from PATCH method
            $listItem = ListItem::find($request->list_item_id);

            if ($listItem->file != '' && $img_path != '')
                ImageStorageService::delete($listItem);

            $listItem->update([
                'name' => $request->name,
                'file' => $img_path['original'] ?? $listItem->file,
                'file_preview' => $img_path['preview'] ?? $listItem->file_preview,
                'description' => $request->description,
            ]);
        } else {
            $listItem = ListItem::create([
                'name' => $request->name,
                'file' => $img_path['original'] ?? '',
                'file_preview' => $img_path['preview'] ?? '',
                'task_list_id' => $request->task_list_id,
                'description' => $request->description,
            ]);
        }

        if ($request->tags)
            TagController::storeTags($listItem, $request->tags);

    }

    /**
     * Delete list item
     * @param ListItem $listItem
     * @return void
     */
    public static function delete(ListItem $listItem): void
    {
        ImageStorageService::delete($listItem);
        TagController::deleteTags($listItem->id);
        $listItem->delete();
    }

    /**
     * Change list item status
     * @param CheckboxRequest $request
     * @return void
     */
    public function changeCompleted(CheckboxRequest $request): void
    {
        $listItem = ListItem::find($request->list_item_id);
        $listItem->completed = !$listItem->completed;
        $listItem->save();
    }

    /**
     * Delete all list items by task list id
     * @param TaskList $taskList
     * @return void
     */
    public static function deleteAllByTaskListId(TaskList $taskList): void
    {
        ListItem::where('task_list_id', $taskList->id)
            ->delete();
    }

}

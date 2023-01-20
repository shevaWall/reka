<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TagController;
use App\Http\Requests\ListItem\CheckboxRequest;
use App\Http\Requests\ListItem\StoreRequest;
use App\Models\ListItem;

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

        if($request->tags)
           $tag =  TagController::storeTags($listItem, $request->tags);

        return response()->json([
            'status' => $tag,
        ]);
    }

    public static function delete(ListItem $listItem)
    {
        ImageStorageService::delete($listItem);
        TagController::deleteTags($listItem->id);
        $listItem->delete();
    }

    public function changeCompleted(CheckboxRequest $request)
    {
        $listItem = ListItem::find($request->list_item_id);
        $listItem->completed = !$listItem->completed;
        $listItem->save();

        return response()->json([
            'status' => 'ok',
            'data' => $listItem,
        ]);
    }

}

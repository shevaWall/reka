<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\ListItemService;
use App\Http\Requests\ListItem\PatchRequest;
use App\Models\ListItem;
use App\Models\TaskList;
use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function show(TaskList $taskList)
    {
        $listItems = ListItem::where('task_list_id', $taskList->id)->get();

        return view('components.list-items.wrapper-list-items')
            ->with('listItems', $listItems);
    }

    public function showById(ListItem $listItem)
    {
        return view('components.list-items.item')
            ->with('listItem', $listItem);
    }

    public function destroy(ListItem $listItem)
    {
        ListItemService::delete($listItem);

        return response()->json([
            'status' => 'ok',
            'message' => 'successfully deleted',
        ]);
    }
}

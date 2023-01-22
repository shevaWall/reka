<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\ListItemService;
use App\Models\ListItem;
use App\Models\TaskList;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class ListItemController extends Controller
{
    /**
     * return list items view by task list id
     * @param TaskList $taskList
     * @return Application|Factory|View
     */
    public function show(TaskList $taskList): View|Factory|Application
    {
        $listItems = ListItem::where('task_list_id', $taskList->id)->get();

        return view('components.list-items.wrapper-list-items')
            ->with('listItems', $listItems);
    }

    /**
     * return once list item view by list item id
     * @param ListItem $listItem
     * @return Application|Factory|View
     */
    public function showById(ListItem $listItem): View|Factory|Application
    {
        return view('components.list-items.item')
            ->with('listItem', $listItem);
    }

    /**
     * delete list item by list item id
     * @param ListItem $listItem
     * @return void
     */
    public function destroy(ListItem $listItem): void
    {
        ListItemService::delete($listItem);
    }
}

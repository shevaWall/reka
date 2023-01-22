<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Store new tag for list item
     * @param ListItem $listItem
     * @param string $tags
     * @return void
     */
    public static function storeTags(ListItem $listItem, string $tags): void
    {
        $tags_array = explode(',', $tags);

        $tags_collection = collect();
        foreach ($tags_array as $tag){
            $prepared_tag = [
                'list_items_id' => $listItem->id,
                'name' => trim($tag),
            ];
            $tags_collection->push($prepared_tag);
        }

        DB::table('tags')->insert($tags_collection->toArray());
    }

    /**
     * delete all tags by list item id
     * @param int $listItem_id
     * @return void
     */
    public static function deleteTags(int $listItem_id): void
    {
        Tag::where('list_items_id', $listItem_id)->delete();
    }

    /**
     * delete tag by tag
     * @param Tag $tag
     * @return void
     */
    public function deleteTag(Tag $tag): void
    {
        $tag->delete();
    }
}

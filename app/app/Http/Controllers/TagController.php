<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public static function storeTags(ListItem $listItem, string $tags)
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

    public static function deleteTags(int $listItem_id)
    {
        Tag::where('list_items_id', $listItem_id)->delete();
    }

    public function deleteTag(Tag $tag)
    {
        $tag->delete();
    }
}

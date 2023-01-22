<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\ListItem;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImageStorageService extends Controller
{
    /**
     * Store image from request
     * @param $req_file
     * @return array
     */
    public static function store($req_file): array
    {
        $r['original'] = $req_file->store('listItems_imgs', 'public');
        $r['preview'] = (new ImageStorageService)->makePreview($r['original'], $req_file->extension());

        return $r;
    }

    /**
     * Delete image from db and storage folder
     * @param ListItem $listItem
     * @return void
     */
    public static function delete(ListItem $listItem): void
    {
        if ($listItem->file){
            Storage::disk('public')->delete($listItem->file);
            $listItem->file = '';
        }

        if ($listItem->file_preview){
            Storage::disk('public')->delete($listItem->file_preview);
            $listItem->file_preview = '';
        }

        $listItem->save();
    }

    /**
     * Make preview
     * @param $originalFile_path
     * @param $extension
     * @return string
     */
    private function makePreview($originalFile_path, $extension): string
    {
        $file = Storage::disk('public')->get($originalFile_path);
        $previewImg = Image::make($file);

        if ($previewImg->height() > 150 || $previewImg->width() > 150)
            $previewImg->crop(150, 150);

        $previewFile_name = $this->makePreviewFIleName($originalFile_path);

        $previewImg->save(Storage::disk('public')->path('listItems_imgs')."/$previewFile_name.$extension");
        return "listItems_imgs/$previewFile_name.$extension";

    }

    /**
     * Make name for preview file
     * @param $originalFile_path
     * @return string
     */
    private function makePreviewFIleName($originalFile_path): string
    {
        $ex = explode('/', $originalFile_path);
        $f_name = explode('.', $ex[1]);
        return $f_name[0].="_preview";
    }
}

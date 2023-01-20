<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    use HasFactory;

    protected $with = ['tags'];

    protected $fillable = [
        'name',
        'description',
        'file',
        'file_preview',
        'completed',
        'task_list_id',
    ];


    public function tags()
    {
        return $this->hasMany(Tag::class, 'list_items_id', 'id');
    }
}

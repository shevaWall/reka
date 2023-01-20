<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Services\ImageStorageService;
use App\Http\Controllers\Services\ListItemService;
use App\Http\Controllers\Services\TaskListService;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::group([
    'middleware' => 'auth',
], function () {

    // profile route
    Route::group([
        'prefix' => 'profile',
        'as' => 'profile.',
    ], function(){
        Route::get("/", [ProfileController::class, "edit"])
            ->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])
            ->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])
            ->name('destroy');
    });

    // Dashboard
    Route::get("/dashboard", [DashboardController::class, "index"])
        ->middleware('verified')
        ->name('dashboard');


    // taskList
    Route::group([
        'prefix'    =>  'ajax',
        'as'        =>  'ajax.',
    ], function(){

        //task Lists
        Route::group([
            'prefix'    =>  'taskList',
            'as'        =>  'taskList.',
        ], function(){
            Route::post('store', [TaskListService::class, "store"]);
            Route::delete('/{taskList}', [TaskListService::class, 'destroy']);
            Route::get('/', [TaskListController::class, "index"]);
            Route::patch("/", [TaskListService::class, "patch"]);
            Route::get("{taskList_id}", [TaskListController::class, "show"])
                ->middleware('ch_own');
        });

        // list items
        Route::group([
            'prefix'    =>  'listItems',
            'as'        =>  'listItems.',
        ], function(){
            Route::post('/', [ListItemService::class, "store"]);
            Route::delete('/{listItem}', [ListItemController::class, 'destroy']);
            Route::get("/listItem_{listItem}", [ListItemController::class, "showById"]);
            Route::get("/{taskList}", [ListItemController::class, "show"]);
            Route::patch('/', [ListItemService::class, 'changeCompleted']);
        });

        Route::group([
            'prefix'    =>  'listItemImage',
            'as'        =>  'listItemImage.',
        ], function(){
            Route::delete('/{listItem}', [ImageStorageService::class, 'delete']);
        });

        Route::group([
            'prefix'    =>  'tags',
            'as'        =>  'tags.',
        ], function(){
            Route::delete('/{tag}', [TagController::class, 'deleteTag']);
        });
    });

});

require __DIR__ . '/auth.php';

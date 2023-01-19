<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Services\TaskListService;
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
        Route::group([
            'prefix'    =>  'taskList',
            'as'        =>  'taskList.',
        ], function(){
            Route::post('store', [TaskListService::class, "store"]);
            Route::delete('/', [TaskListService::class, 'destroy']);
            Route::get('/', [TaskListController::class, "index"]);
            Route::patch("/", [TaskListService::class, "patch"]);
            Route::get("{taskList_id}", [TaskListController::class, "show"])
                ->middleware('ch_own');
        });
    });
});

require __DIR__ . '/auth.php';

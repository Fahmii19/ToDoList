<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiTodoListController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get("todolist/delete/{id}", "ApiTodoListController@postDelete");
// Route::post("todolist/update/{id}", "ApiTodoListController@postUpdate");
// Route::post("todolist/create/{id}", "ApiTodoListController@postCreate");
// Route::get("todolist/list", "ApiTodoListController@getList");

Route::get('todolist/delete/{id}', [ApiTodoListController::class, 'postDelete']);
Route::post('todolist/update/{id}', [ApiTodoListController::class, 'postUpdate']);
Route::post('todolist/create', [ApiTodoListController::class, 'postCreate']);
Route::get('todolist/list', [ApiTodoListController::class, 'getList']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

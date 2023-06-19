<?php

use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TechnologyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/projects", [ProjectController::class, "index"]);
Route::get("/projects/{slug}", [ProjectController::class, "show"]);

Route::get("/latestProjects", [ProjectController::class, "latest"]);

Route::get("/technologies", [TechnologyController::class, "index"]);

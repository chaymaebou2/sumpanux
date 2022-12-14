<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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

Route::get("getData",[apiController::class,'getData']);
Route::get("jsonData",[apiController::class,'jsonData']);
Route::get("Course",[apiController::class,'Course']);
Route::get("DetailCourseConnect",[apiController::class,'DetailCourseConnect']);
Route::get("DetailCourse",[apiController::class,'DetailCourse']);



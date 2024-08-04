<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\NoteController;
use App\Http\Middleware\CheckRole;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::prefix('notes')->group(function () {
    Route::get('/', [NoteController::class, 'index']);
    Route::get('/{id}', [NoteController::class, 'show']);
    Route::post('/', [NoteController::class, 'store']);
    Route::put('/{id}', [NoteController::class, 'update']);
    Route::delete('/{id}', [NoteController::class, 'destroy']);
});

Route::prefix('grades')->group(function () {
    Route::get('/', [GradeController::class, 'index']);
    Route::get('/{id}', [GradeController::class, 'show']);
    Route::post('/', [GradeController::class, 'store']);
    Route::put('/{id}', [GradeController::class, 'update']);
    Route::delete('/{id}', [GradeController::class, 'destroy']);
});

Route::prefix('assignments')->group(function () {
    Route::get('/', [AssignmentController::class, 'index']);
        Route::get('/{id}', [AssignmentController::class, 'show']);
        Route::post('/', [AssignmentController::class, 'store']);
        Route::put('/{id}', [AssignmentController::class, 'update']);
        Route::delete('/{id}', [AssignmentController::class, 'destroy']);
});



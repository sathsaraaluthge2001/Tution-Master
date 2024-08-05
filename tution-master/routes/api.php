<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AdsController;
use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::prefix('ads')->group(function () {
    Route::get('/', [AdsController::class, 'index']);
    Route::get('/{id}', [AdsController::class, 'show']);
    Route::post('/', [AdsController::class, 'store']);
    Route::put('/{id}', [AdsController::class, 'update']);
    Route::delete('/{id}', [AdsController::class, 'destroy']);
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

Route::prefix('papers')->group(function () {
    Route::get('/', [PaperController::class, 'index']);
    Route::get('/{id}', [PaperController::class, 'show']);
    Route::post('/', [PaperController::class, 'store']);
    Route::put('/{id}', [PaperController::class, 'update']);
    Route::delete('/{id}', [PaperController::class, 'destroy']);
});

Route::prefix('assignments')->group(function () {
    Route::get('/', [AssignmentController::class, 'index']);
    Route::get('/{id}', [AssignmentController::class, 'show']);
    Route::post('/', [AssignmentController::class, 'store']);
    Route::put('/{id}', [AssignmentController::class, 'update']);
    Route::delete('/{id}', [AssignmentController::class, 'destroy']);
});

Route::prefix('enrollments')->group(function () {
    Route::get('/', [EnrollmentController::class, 'index']);
    Route::get('/{id}', [EnrollmentController::class, 'show']);
    Route::post('/', [EnrollmentController::class, 'store']);
    Route::put('/{id}', [EnrollmentController::class, 'update']);
    Route::delete('/{id}', [EnrollmentController::class, 'destroy']);
});


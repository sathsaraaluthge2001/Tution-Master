<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AdsController;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/sign-up', function () {
    return view('admin.sign-up');
});

Route::get('/addassigments', function () {
    return view('admin.addassigment');
});


Route::get('/addpapers', function () {
    return view('admin.addpapers');
});

Route::get('/addnotes', function () {
    return view('admin.addnotes');
});

Route::get('/adduser', function () {
    return view('admin.adduser');
});

Route::get('/viewuser', function () {
    return view('admin.viewuser');
});

Route::get('/viewassigment', function () {
    return view('admin.viewassigment');
});

Route::get('/viewnotes', function () {
    return view('admin.viewnote');
});

Route::get('/viewpapers', function () {
    return view('admin.viewpaper');
});


Route::prefix('assignments')->group(function () {
    Route::get('/', [AssignmentController::class, 'index']);
    Route::get('/{id}', [AssignmentController::class, 'show']);
    Route::post('/', [AssignmentController::class, 'store']);
    Route::put('/{id}', [AssignmentController::class, 'update']);
    Route::delete('/{id}', [AssignmentController::class, 'destroy']);
});

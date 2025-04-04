<?php

use App\Http\Controllers\Group\GroupController;
use Illuminate\Support\Facades\Route;

Route::prefix('group')->middleware(['auth'])->group(function () {
    Route::get('/', [GroupController::class, 'index'])->name('group_index');
    Route::get('/show', [GroupController::class, 'show'])->name('group_show');
});

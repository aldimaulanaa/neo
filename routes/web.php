<?php

use App\Http\Controllers\WorkTransactionController;

Route::get('/', [WorkTransactionController::class, 'index'])
    ->name('work-transactions.index');

Route::get('/work-transactions/{id}/edit', [WorkTransactionController::class, 'edit'])
    ->name('work-transactions.edit');

Route::put('/work-transactions/{id}', [WorkTransactionController::class, 'update'])
    ->name('work-transactions.update');


<?php

use App\Http\Controllers\FruitController;

Route::get('/fruits', [FruitController::class, 'index']);
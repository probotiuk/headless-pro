<?php

use Illuminate\Support\Facades\Route;
use Probotiuk\HeadlessPro\Http\Controllers\CollectionController;

Route::get('/posts', [CollectionController::class, 'index']);

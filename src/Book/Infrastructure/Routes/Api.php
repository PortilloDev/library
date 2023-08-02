<?php

namespace Src\User\Infrastructure\Routes;

use Illuminate\Support\Facades\Route;
use Src\Book\Infrastructure\Controller\BookFindAllBooksController;
use Src\Book\Infrastructure\Controller\BookFindController;
use Src\Book\Infrastructure\Controller\CreateBookController;
use Src\Book\Infrastructure\Controller\DeleteBookController;


Route::get('/', BookFindAllBooksController::class);
Route::get('/{id}', BookFindController::class);
Route::post('/', CreateBookController::class);
Route::delete('/{id}', DeleteBookController::class);

<?php

namespace Src\User\Infrastructure\Routes;

use Illuminate\Support\Facades\Route;
use Src\User\Infrastructure\Controller\UserFindAllUserController;
use Src\User\Infrastructure\Controller\DeleteUserController;
use Src\User\Infrastructure\Controller\UserFindController;

Route::get('/', UserFindAllUserController::class);
Route::get('/{id}', UserFindController::class);
Route::delete('/{id}', DeleteUserController::class);


<?php

namespace Src\User\Infrastructure\Routes;

use Illuminate\Support\Facades\Route;
use Src\User\Infrastructure\Controller\UserFindAllUserController;


Route::get('/', UserFindAllUserController::class);

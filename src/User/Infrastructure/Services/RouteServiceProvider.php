<?php

namespace Src\User\Infrastructure\Services;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\User\Infrastructure\Controller';

    public function boot()
    {
        parent::boot();
    }

    public function map(): void
    {
        $this->mapRoutes();
    }

    public function mapRoutes(): void
    {
        Route::prefix('api/user')
        ->namespace($this->namespace)
        ->group(base_path('src/User/Infrastructure/Routes/Api.php'));
    }
}

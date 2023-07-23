<?php

namespace Src\Book\Infrastructure\Services;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\Book\Infrastructure\Controller';

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
        Route::prefix('api/book')
            ->namespace($this->namespace)
            ->group(base_path('src/Book/Infrastructure/Routes/Api.php'));
    }
}

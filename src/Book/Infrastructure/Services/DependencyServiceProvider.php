<?php

namespace Src\Book\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

final class DependencyServiceProvider extends ServiceProvider
{
     /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(\Src\Book\Application\Query\BookFindAllAction::class)
        ->needs(\Src\Book\Domain\Contract\BookRepositoryInterface::class)
        ->give(\Src\Book\Infrastructure\Repository\Eloquent\BookRepository::class);

        $this->app->when(\Src\Book\Application\Command\CreateBookAction::class)
            ->needs(\Src\Book\Domain\Contract\BookRepositoryInterface::class)
            ->give(\Src\Book\Infrastructure\Repository\Eloquent\BookRepository::class);

        $this->app->when(\Src\Book\Application\Query\BookFindAction::class)
        ->needs(\Src\Book\Domain\Contract\BookRepositoryInterface::class)
        ->give(\Src\Book\Infrastructure\Repository\Eloquent\BookRepository::class);

        $this->app->when(\Src\Book\Application\Command\DeleteBookAction::class)
        ->needs(\Src\Book\Domain\Contract\BookRepositoryInterface::class)
        ->give(\Src\Book\Infrastructure\Repository\Eloquent\BookRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

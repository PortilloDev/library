<?php

namespace Src\User\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

final class DependencyServiceProvider extends ServiceProvider
{
     /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(\Src\User\Application\Query\BookFindAllAction::class)
        ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
        ->give(\Src\User\Infrastructure\Repository\Eloquent\BookRepository::class);

        $this->app->when(\Src\User\Application\Command\CreateBookAction::class)
            ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
            ->give(\Src\User\Infrastructure\Repository\Eloquent\BookRepository::class);

        $this->app->when(\Src\User\Application\Query\BookFindAction::class)
        ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
        ->give(\Src\User\Infrastructure\Repository\Eloquent\BookRepository::class);

        $this->app->when(\Src\User\Application\Command\DeleteBookAction::class)
        ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
        ->give(\Src\User\Infrastructure\Repository\Eloquent\BookRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

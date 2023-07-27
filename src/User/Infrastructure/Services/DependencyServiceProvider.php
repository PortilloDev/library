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
        $this->app->when(\Src\User\Application\Query\UserFindAllAction::class)
        ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
        ->give(\Src\User\Infrastructure\Repository\Eloquent\UserRepository::class);

        $this->app->when(\Src\User\Application\Query\UserFindAction::class)
        ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
        ->give(\Src\User\Infrastructure\Repository\Eloquent\UserRepository::class);

        $this->app->when(\Src\User\Application\Command\DeleteUserAction::class)
        ->needs(\Src\User\Domain\Contract\UserRepositoryInterface::class)
        ->give(\Src\User\Infrastructure\Repository\Eloquent\UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
<?php 

namespace Src\User\Infrastructure\Repository\Eloquent;

use Src\User\Domain\Contract\UserRepositoryInterface;
use Src\User\Domain\User;


final class UserRepository implements UserRepositoryInterface
{
    private User $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }
    public function findeUser(): User
    {
            return new User();


    }
    public function save(User $user): void
    {

    }
    public function remove(User $user): void
    {

    }
}
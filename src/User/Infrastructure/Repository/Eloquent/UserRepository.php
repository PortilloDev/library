<?php

namespace Src\User\Infrastructure\Repository\Eloquent;

use Illuminate\Support\Facades\DB;
use Src\User\Domain\Contract\UserRepositoryInterface;
use Src\User\Domain\User;
use Src\User\Domain\ValueObject\UserValueObject;

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
    public function findeUser(int $id): ?User
    {
           return $this->model->find($id);


    }
    public function save(UserValueObject $userVO): int
    {
       $user = User::create([
            'name' => $userVO->getName()->value(),
            'email' => $userVO->getEmail()->value(),
            'password' => $userVO->getPassword()->value(),
        ]);

       return $user->id;
    }
    public function remove(User $user): void
    {
        $this->model->where('id',$user->id)->delete();;
    }
}

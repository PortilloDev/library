<?php 

namespace Src\User\Domain\Contract;

use Src\User\Domain\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function findAll(): array;
    public function findeUser(): User;
    public function save(User $user): void;
    public function remove(User $user): void;
}
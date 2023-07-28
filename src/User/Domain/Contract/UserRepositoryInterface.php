<?php

namespace Src\User\Domain\Contract;

use Src\User\Domain\User;

use Src\User\Domain\ValueObject\UserValueObject;

interface UserRepositoryInterface
{
    public function findAll(): array;
    public function findeUser(int $id): ?User;
    public function save(UserValueObject $userVO): int;
    public function remove(User $user): void;
}

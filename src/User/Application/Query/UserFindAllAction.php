<?php

namespace Src\User\Application\Query;

use Src\Shared\Domain\Exception\CustomException;
use Src\User\Domain\Contract\UserRepositoryInterface;

final class UserFindAllAction
{
    public function __construct(private UserRepositoryInterface $userRepositoryInterface)
    {
     
    }

    public function __invoke(): array
    { 
        return $this->userRepositoryInterface->findAll();
    }
}

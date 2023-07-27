<?php

namespace Src\User\Application\Command;

use Src\Shared\Domain\Exception\CustomException;
use Src\User\Domain\Contract\UserRepositoryInterface;

final class DeleteUserAction
{
    public function __construct(private UserRepositoryInterface $userRepositoryInterface)
    {
     
    }

    public function __invoke(int $id): array
    { 
        $user =  $this->userRepositoryInterface->findeUser($id); 
       
        if (null === $user) {
            throw new CustomException('Usuario no encontrado', 404);
        }
         $this->userRepositoryInterface->remove($user);

         return [];
    }
}

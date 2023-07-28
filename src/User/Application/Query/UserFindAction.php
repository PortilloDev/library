<?php

namespace Src\User\Application\Query;

use Src\Shared\Domain\Exception\CustomException;
use Src\User\Domain\Contract\UserRepositoryInterface;
use Src\User\Domain\Dto\UserDto;

final class UserFindAction
{
    public function __construct(private readonly UserRepositoryInterface $userRepositoryInterface)
    {

    }

    /**
     * @throws CustomException
     */
    public function __invoke(int $id): array
    {
        $user = $this->userRepositoryInterface->findeUser($id);

        if (null === $user) {
            throw new CustomException('Usuario no encontrado', 404);
        }

        return[ new UserDto($user)];
    }
}

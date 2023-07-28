<?php

namespace Src\User\Application\Command;

use Src\User\Domain\Contract\UserRepositoryInterface;
use Src\User\Domain\ValueObject\EmailValueObject;
use Src\User\Domain\ValueObject\NameValueObject;
use Src\User\Domain\ValueObject\PasswordValueObject;
use Src\User\Domain\ValueObject\UserValueObject;

final class CreateUserAction
{
    public function __construct(private readonly UserRepositoryInterface $userRepositoryInterface)
    {

    }

    public function __invoke(EmailValueObject $email, NameValueObject $name, PasswordValueObject $password): array
    {

         $userValueObject = new UserValueObject($email, $name, $password);
         $userId = $this->userRepositoryInterface->save($userValueObject);

         return [
              'message' => 'User created',
              'data' => [
                  'id' => $userId
              ]
         ];
    }
}

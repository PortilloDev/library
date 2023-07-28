<?php

namespace Src\User\Infrastructure\Controller;

use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\User\Application\Command\CreateUserAction;
use Src\User\Domain\ValueObject\EmailValueObject;
use Src\User\Domain\ValueObject\NameValueObject;
use Src\User\Domain\ValueObject\PasswordValueObject;
use Src\User\Infrastructure\Request\UserCreateRequest;

final class CreateUserController extends AbstractApiController
{
    private CreateUserAction $createUserAction;
    public function __construct(LoggerInterface $logger, CreateUserAction $createUserAction)
    {
        parent::__construct($logger);
        $this->createUserAction = $createUserAction;
    }

    public function __invoke(UserCreateRequest $request): JsonResponse
    {
        $email = new EmailValueObject($request->email);
        $name = new NameValueObject($request->name);
        $password = new PasswordValueObject($request->password);

        return $this->success($this->createUserAction->__invoke($email, $name, $password));
    }
}

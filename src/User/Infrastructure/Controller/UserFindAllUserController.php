<?php

namespace Src\User\Infrastructure\Controller;


use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\User\Application\Query\UserFindAllAction;

final class UserFindAllUserController extends AbstractApiController
{
    private UserFindAllAction $userFindAllAction;
    public function __construct(LoggerInterface $logger, UserFindAllAction $userFindAllAction)
    {
        parent::__construct($logger);
        $this->userFindAllAction = $userFindAllAction;
    }

    public function __invoke(): JsonResponse
    {
        return $this->success($this->userFindAllAction->__invoke());
    }
}

<?php

namespace Src\User\Infrastructure\Controller;


use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\User\Application\Query\BookFindAllAction;

final class UserFindAllUserController extends AbstractApiController
{
    private BookFindAllAction $userFindAllAction;
    public function __construct(LoggerInterface $logger, BookFindAllAction $userFindAllAction)
    {
        parent::__construct($logger);
        $this->userFindAllAction = $userFindAllAction;
    }

    public function __invoke(): JsonResponse
    {
        return $this->success($this->userFindAllAction->__invoke());
    }
}

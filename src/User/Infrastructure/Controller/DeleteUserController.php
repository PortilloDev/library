<?php

namespace Src\User\Infrastructure\Controller;

use Illuminate\Http\Client\Request;
use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\User\Application\Command\DeleteBookAction;

final class DeleteUserController extends AbstractApiController
{
    private DeleteBookAction $deleteUserAction;
    public function __construct(LoggerInterface $logger, DeleteBookAction $deleteUserAction)
    {
        parent::__construct($logger);
        $this->deleteUserAction = $deleteUserAction;
    }

    public function __invoke(int $id): JsonResponse
    {
           return $this->success($this->deleteUserAction->__invoke($id));
    }
}

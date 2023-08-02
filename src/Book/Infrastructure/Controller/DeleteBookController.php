<?php

namespace Src\Book\Infrastructure\Controller;


use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\Book\Application\Command\DeleteBookAction;

final class DeleteBookController extends AbstractApiController
{
    private DeleteBookAction $deleteBookAction;
    public function __construct(LoggerInterface $logger, DeleteBookAction $deleteBookAction)
    {
        parent::__construct($logger);
        $this->deleteBookAction = $deleteBookAction;
    }

    public function __invoke(int $id): JsonResponse
    {
           return $this->success($this->deleteBookAction->__invoke($id));
    }
}

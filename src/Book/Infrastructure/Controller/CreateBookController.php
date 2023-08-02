<?php

namespace Src\Book\Infrastructure\Controller;

use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Book\Infrastructure\Request\BookCreateRequest;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\Book\Application\Command\CreateBookAction;

final class CreateBookController extends AbstractApiController
{
    private CreateBookAction $createBookAction;
    public function __construct(LoggerInterface $logger, CreateBookAction $createBookAction)
    {
        parent::__construct($logger);
        $this->createBookAction = $createBookAction;
    }

    public function __invoke(BookCreateRequest $request): JsonResponse
    {

        return $this->success($this->createBookAction->__invoke(
            $request->title, $request->description, $request->category_id, null, null
        )
        );
    }
}

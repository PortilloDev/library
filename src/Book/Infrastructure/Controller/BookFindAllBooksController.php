<?php

namespace Src\Book\Infrastructure\Controller;


use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Src\Book\Application\Query\BookFindAllAction;

final class BookFindAllBooksController extends AbstractApiController
{
    private BookFindAllAction $bookFindAllAction;
    public function __construct(LoggerInterface $logger, BookFindAllAction $bookFindAllAction)
    {
        parent::__construct($logger);
        $this->bookFindAllAction = $bookFindAllAction;
    }

    public function __invoke(): JsonResponse
    {
        return $this->success($this->bookFindAllAction->__invoke());
    }
}

<?php


namespace Src\Book\Infrastructure\Controller;

use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\Book\Application\Query\BookFindAction;
final class BookFindController extends AbstractApiController
{

    private BookFindAction $bookFindAction;
    public function __construct(LoggerInterface $logger, BookFindAction $bookFindAction)
    {
        parent::__construct($logger);
        $this->bookFindAction = $bookFindAction;
    }

    public function __invoke(int $id): JsonResponse
    {
        return $this->success($this->bookFindAction->__invoke($id));
    }
}

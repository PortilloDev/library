<?php


namespace Src\User\Infrastructure\Controller;

use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\User\Application\Query\BookFindAction;
final class UserFindController extends AbstractApiController
{

    private BookFindAction $userFindAllAction;
    public function __construct(LoggerInterface $logger, BookFindAction $userFindAllAction)
    {
        parent::__construct($logger);
        $this->userFindAllAction = $userFindAllAction;
    }

    public function __invoke(int $id): JsonResponse
    {
        return $this->success($this->userFindAllAction->__invoke($id));
    }
}

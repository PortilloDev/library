<?php 


namespace Src\User\Infrastructure\Controller;

use Src\Shared\Infrastructure\Controller\AbstractApiController;
use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Src\User\Application\Query\UserFindAction;
final class UserFindController extends AbstractApiController
{

    private UserFindAction $userFindAllAction;
    public function __construct(LoggerInterface $logger, UserFindAction $userFindAllAction)
    {
        parent::__construct($logger);
        $this->userFindAllAction = $userFindAllAction;
    }

    public function __invoke(int $id): JsonResponse
    {
        return $this->success($this->userFindAllAction->__invoke($id));
    }
}
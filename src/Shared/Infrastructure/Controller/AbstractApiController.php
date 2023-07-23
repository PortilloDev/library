<?php

namespace Src\Shared\Infrastructure\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class AbstractApiController extends Controller
{
    protected LoggerInterface $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function success(array $data = null, int $status = 200, array $headers = []): JsonResponse
    {
        assert($status >= 200 && $status < 300, 'invalid success status code');
        return response()->json(
            $data,
            $status,
            $headers,
            true
        );
    }
    public function notFound(string $message = 'Resource not found'): JsonResponse
    {
        return response()->json(
            $message,
            Response::HTTP_NOT_FOUND
        );
    }

    public function badRequest(string $message, array $errors = null, int $status = 400): JsonResponse
    {
        assert($status >= 400 && $status < 500, 'invalid bad request status code');

        return response()->json(
            $message,
            $status
        );
    }
}

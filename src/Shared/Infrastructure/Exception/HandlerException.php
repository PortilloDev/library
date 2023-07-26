<?php

namespace Src\Shared\Infrastructure\Exception;

use Illuminate\Foundation\Exceptions\Handler;
use Src\Shared\Domain\Exception\CustomException;
use Throwable;
final class HandlerException extends Handler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (Throwable $e) {
            if ($e instanceof CustomException) {
                return $e->toException();
            }
        });
    }
}

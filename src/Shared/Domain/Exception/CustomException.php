<?php

namespace Src\Shared\Domain\Exception;

use Illuminate\Http\JsonResponse;

class CustomException extends \Exception
{
    public function toException(): JsonResponse
    {
        $classException = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classException->getName());

        return response()->json( [
          'status' => $this->getCode(),
          'error' => true,
          'class' => end($class),
          'message' => $this->getMessage(),
        ], $this->getCode());

    }
}

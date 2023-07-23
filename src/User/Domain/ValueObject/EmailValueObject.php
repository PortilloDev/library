<?php

namespace Src\User\Domain\ValueObject;

final class EmailValueObject
{
    public function __construct(private readonly string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }
}

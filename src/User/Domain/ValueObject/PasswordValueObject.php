<?php

namespace Src\User\Domain\ValueObject;

final class PasswordValueObject
{
    public function __construct(private readonly string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }
}

<?php

namespace Src\User\Domain\ValueObject;

final class NameValueObject
{
    public function __construct(private readonly string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }
}

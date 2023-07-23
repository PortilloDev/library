<?php

namespace Src\User\Domain\ValueObject;

final class FullNameValueObject
{
    public function __construct(private readonly array $value)
    {
    }

    public function value(): array
    {
        return $this->value;
    }

    public function firstName(): string
    {
        return $this->value['firstName'];
    }
    public function lastName(): string
    {
        return $this->value['lastName'];
    }

    public function fullName(): string
    {
        return $this->value['firstName'] .' '. $this->value['lastName'];
    }
}

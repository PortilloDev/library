<?php

namespace Src\User\Domain\ValueObject;

use Illuminate\Database\DBAL\TimestampType;

class UserValueObject
{
    public function __construct(
        private EmailValueObject $email,
        private NameValueObject $name,
        private PasswordValueObject $password
    )
    {
    }

    public function getEmail(): EmailValueObject
    {
        return $this->email;
    }
    public function getName(): NameValueObject
    {
        return $this->name;
    }
    public function getPassword(): PasswordValueObject
    {
        return $this->password;
    }
}

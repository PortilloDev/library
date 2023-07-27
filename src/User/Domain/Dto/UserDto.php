<?php 

namespace Src\User\Domain\Dto;

use JsonSerializable;
use Src\User\Domain\User;

class UserDto implements JsonSerializable
{
    public function __construct(private User $user)
    {
        
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->user->id,
            'name' => $this->user->name,
            'email' => $this->user->email,
            'created_at' => $this->user->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
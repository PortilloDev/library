<?php

namespace Src\User\Application\Query;

final class UserFindAllAction
{
    public function __construct()
    {
        // Todo
    }

    public function __invoke(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Iván'
            ],
            [
                'id' => 2,
                'name' => 'Alicia'
            ],
        ];
    }
}

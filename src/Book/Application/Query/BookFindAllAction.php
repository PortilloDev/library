<?php

namespace Src\Book\Application\Query;

use Src\Book\Domain\Contract\BookRepositoryInterface;
use Src\Shared\Domain\Exception\CustomException;

final class BookFindAllAction
{
    public function __construct(private readonly BookRepositoryInterface $bookRepository)
    {

    }

    public function __invoke(): array
    {
        return $this->bookRepository->findAll();
    }
}

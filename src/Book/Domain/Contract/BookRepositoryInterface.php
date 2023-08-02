<?php

namespace Src\Book\Domain\Contract;

use Src\Book\Domain\Book;
use Src\Book\Domain\ValueObject\BookValueObject;

interface BookRepositoryInterface
{
    public function findAll(): array;
    public function findBook(int $id): ?Book;
    public function save(BookValueObject $bookValueObject): int;
    public function remove(Book $book): void;
}

<?php

namespace Src\Book\Application\Command;

use Src\Book\Domain\Contract\BookRepositoryInterface;
use Src\Shared\Domain\Exception\CustomException;

final class DeleteBookAction
{
    public function __construct(private readonly BookRepositoryInterface $bookRepository)
    {

    }

    public function __invoke(int $id): array
    {
        $book =  $this->bookRepository->findBook($id);

        if (null === $book) {
            throw new CustomException('Libro no encontrado', 404);
        }
         $this->bookRepository->remove($book);

         return [];
    }
}

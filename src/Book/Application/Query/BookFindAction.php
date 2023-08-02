<?php

namespace Src\Book\Application\Query;

use Src\Book\Domain\Contract\BookRepositoryInterface;
use Src\Book\Domain\Dto\BookDto;
use Src\Shared\Domain\Exception\CustomException;

final class BookFindAction
{
    public function __construct(private readonly BookRepositoryInterface $bookRepository)
    {

    }

    /**
     * @throws CustomException
     */
    public function __invoke(int $id): array
    {
        $book = $this->bookRepository->findBook($id);

        if (null === $book) {
            throw new CustomException('Libro no encontrado', 404);
        }

        return[ new BookDto($book)];
    }
}

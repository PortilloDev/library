<?php

namespace Src\Book\Application\Command;


use Src\Book\Domain\Contract\BookRepositoryInterface;
use Src\Book\Domain\ValueObject\BookValueObject;

final class CreateBookAction
{
    public function __construct(private readonly BookRepositoryInterface $bookRepository)
    {

    }

    public function __invoke(string $title, string $description, int $category, ?string $link, ?string $img ): array
    {

         $bookValueObject = new BookValueObject($title, $description, $category, $link, $img);
         $bookId = $this->bookRepository->save($bookValueObject);

         return [
              'message' => 'Book created',
              'data' => [
                  'id' => $bookId
              ]
         ];
    }
}

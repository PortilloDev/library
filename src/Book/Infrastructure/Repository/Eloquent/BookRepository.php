<?php

namespace Src\Book\Infrastructure\Repository\Eloquent;

use Src\Book\Domain\Book;
use Src\Book\Domain\Contract\BookRepositoryInterface;
use Src\Book\Domain\ValueObject\BookValueObject;

final class BookRepository implements BookRepositoryInterface
{
    private Book $model;

    public function __construct()
    {
        $this->model = new Book();
    }

    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }
    public function findBook(int $id): ?Book
    {
           return $this->model->find($id);


    }
    public function save(BookValueObject $bookValueObject): int
    {

       $book = Book::create([
           'title' => $bookValueObject->getTitle(),
           'description' => $bookValueObject->getDescription(),
           'category_id' => $bookValueObject->getCategory(),
           'read' => $bookValueObject->isRead(),
           'link' => $bookValueObject->getLink(),
           'img' => $bookValueObject->getImg(),
        ]);

       return $book->id;
    }
    public function remove(Book $book): void
    {
        $this->model->where('id',$book->id)->delete();;
    }
}

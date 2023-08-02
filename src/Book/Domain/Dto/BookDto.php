<?php

namespace Src\Book\Domain\Dto;

use JsonSerializable;
use Src\Book\Domain\Book;

class BookDto implements JsonSerializable
{
    public function __construct(private readonly Book $book)
    {

    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->book->id,
            'title' => $this->book->title,
            'description' => $this->book->description,
            'category_id' => $this->book->category_id,
            'read' => $this->book->read,
            'link' => null !== $this->book->link ?$this->book->link : null,
            'img' => null !== $this->book->img ?$this->book->img : null,
            'created_at' => $this->book->created_at->format('Y-m-d H:i:s'),
        ];
    }
}

<?php

namespace Src\Book\Domain\ValueObject;

use App\Models\Category;
use Illuminate\Database\DBAL\TimestampType;
use Src\User\Domain\ValueObject\EmailValueObject;
use Src\User\Domain\ValueObject\NameValueObject;
use Src\User\Domain\ValueObject\PasswordValueObject;

class BookValueObject
{
    private bool $read = false;
    public function __construct(
        private string $title,
        private string $description,
        private int $category,
        private ?string $link,
        private ?string $img,

    )
    {
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCategory(): int
    {
        return $this->category;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isRead(): bool
    {
        return $this->read;
    }

}

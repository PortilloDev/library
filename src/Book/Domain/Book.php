<?php

namespace Src\Book\Domain;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'description', 'category_id', 'read', 'link', 'img'
    ];
}

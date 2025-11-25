<?php

namespace App\Models;

use \Core\Model;

class Book extends Model
{
    public $id, $isbn, $cover, $title, $resume, $author_id, $category_id, $created_at;

    //Links
    protected $author;

    protected $functionName = "findOneById";
    protected $argument = "author_id";

}
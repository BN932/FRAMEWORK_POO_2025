<?php

namespace App\Models;
use \Core\Model;

class Author extends Model
{
    public $id, $firstname, $lastname, $biography, $picture, $created_at;

    protected $books;
    
    protected $functionName = "findBooksByAuthorId";
    protected $argument = "id";
}


<?php

namespace App\Models;

use \PDO, \Core\DB;

abstract class BooksRepository extends \Core\Repository
{
    
    public static function findBooksByAuthorId(int $id): array {
        $sql = "SELECT *
                FROM books
                WHERE books.author_id = :id;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, Book::class);
    }
}
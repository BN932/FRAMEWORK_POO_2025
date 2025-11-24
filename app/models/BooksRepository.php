<?php

namespace App\Models;

use \PDO, \Core\DB;

abstract class BooksRepository
{
    public static function findAll(int $limit = 9): array
    {
        $sql = "SELECT *
            FROM books
            ORDER BY created_at DESC
            LIMIT :limit;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, Book::class);
    }
}

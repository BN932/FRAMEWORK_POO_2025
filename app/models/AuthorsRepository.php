<?php

namespace App\Models;

use \PDO, \Core\DB;

abstract class AuthorsRepository
{
    public static function findAll(int $limit = 9): array
    {
        $sql = "SELECT *
            FROM authors
            ORDER BY created_at DESC
            LIMIT :limit;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, Author::class);
    }
}

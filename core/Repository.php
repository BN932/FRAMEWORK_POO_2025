<?php

namespace Core;

use \PDO, \Core\DB;

abstract class Repository extends Helpers {
    public static function findAll(int $limit = 9): array
    {
        static::init();
        $sql = "SELECT *
            FROM " . self::$_name_lwc_pl ."
            ORDER BY created_at DESC
            LIMIT :limit;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, self::$_class);
    }
    public static function findOneById(int $id){
        static::init();
        $sql = "SELECT *
                FROM " . self::$_name_lwc_pl ."
                WHERE " .self::$_name_lwc_pl.".id = :id;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(self::$_class);
    }
}
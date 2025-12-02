<?php

namespace Core;

use \PDO, \Core\DB;

abstract class Repository {
    protected static $_table_name, $_class;
    private static function init(){
        $array = explode('\\', static::class);
        $fullname = end($array);
        $array = preg_split('/(?=[A-Z])/', $fullname);
        self::$_class = $array[1];
        self::$_table_name = strtolower(self::$_class);
            if(substr(self::$_class,-1)==='y'):
        self::$_class = 'App\Models\\'.substr(self::$_class, 0, -2);
        else : 
            self::$_class = 'App\Models\\'.substr(self::$_class, 0, -1);
        endif;
    }
    
    public static function findAll(int $limit = 9): array
    {
        self::init();
        $sql = "SELECT *
            FROM " . self::$_table_name ."
            ORDER BY created_at DESC
            LIMIT :limit;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, self::$_class);
    }
    public static function findOneById(int $id){
        self::init();
        $sql = "SELECT *
                FROM " . self::$_table_name ."
                WHERE " .self::$_table_name.".id = :id;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(self::$_class);
    }
}
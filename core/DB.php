<?php

namespace Core;

use \PDO, \PDOException;

abstract class DB
{
    private static $connection;

    private static function setConnection()
    {
        try {
            SELF::$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getConnection()
    {
        if (!SELF::$connection):
            SELF::setConnection();
        endif;
        return SELF::$connection;
    }
}

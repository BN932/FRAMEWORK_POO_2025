<?php

namespace Core;

abstract class Helpers
{

    public static function truncate(string $text, int $length = 100): string
    {
        if (strlen($text) > $length) {
            $cut = substr($text, 0, $length);
            $cut = substr($cut, 0, strrpos($cut, ' '));
            return $cut . '...';
        } else {
            return $text;
        }
    }

    public static function slugify(string $text): string
    {
        // Strip html tags
        $text = strip_tags($text);
        // Replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // Transliterate
        setlocale(LC_ALL, 'en_US.utf8');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // Remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // Trim
        $text = trim($text, '-');
        // Remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // Lowercase
        $text = strtolower($text);
        // Check if it is empty
        if (empty($text)) {
            return 'n-a';
        }
        // Return result
        return $text;
    }
    protected static $_name_lwc_pl, $_name_lwc_sg, $_class;
    protected static function init(){
        $array = explode('\\', static::class);
        $fullname = end($array);
        $array = preg_split('/(?=[A-Z])/', $fullname);
        self::$_class = $array[1];
        self::$_name_lwc_pl = strtolower(self::$_class);
        self::$_name_lwc_sg = substr(self::$_name_lwc_pl, 0, -1);
        if(substr(self::$_class,-1)==='y'):
            self::$_class = 'App\Models\\'.substr(self::$_class, 0, -2);
        else : 
            self::$_class = 'App\Models\\'.substr(self::$_class, 0, -1);
        endif;
    }
}

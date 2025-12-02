<?php

namespace Core;

abstract class Controller extends Helpers {
    public static function indexAction() {
        static::init();
        $repname = 'App\Models\\'.ucfirst(static::$_name_lwc_pl).'Repository';
        ${static::$_name_lwc_pl} = $repname::findAll();
        global $content, $title;
        ob_start();
        $title = static::$_name_lwc_pl;
        include '../app/views/'.static::$_name_lwc_pl.'/index.php';
        $content = ob_get_clean();
    }
    public static function showAction(int $id){
        static::init();
        $repname = 'App\Models\\'.ucfirst(static::$_name_lwc_pl).'Repository';
        ${static::$_name_lwc_sg} = $repname::findOneById($id);
        global $content, $title;
        ob_start();
        $title = static::$_name_lwc_sg;
        include '../app/views/'.static::$_name_lwc_pl.'/_show.php';
        $content = ob_get_clean();
    }
}
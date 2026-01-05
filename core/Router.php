<?php

namespace Core;
use \App\Models\CategoriesRepository, \App\Controllers;

abstract class Routing extends Helpers {
    public static function initRouter($name){
        $namespace = 'App\Controllers';
        $namespaceshort = $name.'Controller';
        $ctrlname = '../app/controllers/'.$name.'Controller.php';
        fopen('../app/routers/'.$name.'.php', "w");
        fwrite($fp, 
        "use $namespace;
        include_once $ctrlname;

        switch (\$_GET[static::\$name]) {
            case 'show':
                $namespaceshort::showAction(\$_GET['id']);
                break;

            default:
                $namespaceshort::indexAction();
                break;
        }");
    }
}
<?php

namespace App\Controllers;

use \App\Models\AuthorsRepository;

abstract class AuthorsController {
    public static function showAction(int $id){
        $author = AuthorsRepository::findOneById($id);
        global $content, $title;
        ob_start();
        $title = $author->firstname . $author->lastname;
            include '../app/views/authors/_show.php';
        $content = ob_get_clean();
    }
}
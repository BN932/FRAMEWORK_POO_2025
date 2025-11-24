<?php

namespace App\Controllers;

use \App\Models\BooksRepository, \App\Models\AuthorsRepository;

abstract class PagesController
{
    public static function homeAction()
    {
        $books = BooksRepository::findAll(3);
        $authors = AuthorsRepository::findAll(3);

        global $content, $title;
        ob_start();
        include '../app/views/pages/home.php';
        $content = ob_get_clean();
    }
}

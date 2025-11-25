<?php

namespace App\Controllers;

use \App\Models\BooksRepository;

abstract class BooksController {
    public static function showAction(int $id){
        $book = BooksRepository::findOneById($id);
        global $content, $title;
        ob_start();
        $title = $book->title;
        include '../app/views/books/_show.php';
        $content = ob_get_clean();
    }
}
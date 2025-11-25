<?php

// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: home

    if(isset($_GET['books'])):
        include_once '../app/routers/books.php';

    elseif(isset($_GET['authors'])):
        include_once '../app/routers/authors.php';
    else:
        \App\Controllers\PagesController::homeAction();
    endif;
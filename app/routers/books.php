<?php

use \App\Controllers\BooksController;
include_once '../app/controllers/BooksController.php';

switch($_GET['books']):
    case 'show':
        BooksController::showAction($_GET['id']);
    break;
    default:
        BooksController::indexAction();
    break;
endswitch;

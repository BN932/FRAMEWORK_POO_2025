<?php

use \App\Controllers\AuthorsController;
include_once '../app/controllers/AuthorsController.php';

switch($_GET['authors']):
    case 'show':
        AuthorsController::showAction($_GET['id']);
    break;
    default:
        AuthorsController::indexAction();
    break;
endswitch;

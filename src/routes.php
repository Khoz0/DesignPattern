<?php

$page = $_GET['page'] ?? $_SERVER['argv'][1] ?? header('Location: index.php?page=accueil');

// Le router de l'application est ici

switch ($page) {

    case 'accueil':
        (new App\controller\AccueilController)->index();
        break;
    default :
        (new App\Controllers\ErreurController)->_404();
        break;
}

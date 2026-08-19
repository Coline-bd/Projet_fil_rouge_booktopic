<?php
include('../env.php');
include("../app/controllers/homeController.php");
include("../app/controllers/profileController.php");
include("../app/controllers/libraryController.php");

//1. Récupérer l'url demandé par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//2. Récupérer le path de l'url : ceux qui vient après le nom de domaine
$path = isset($url['path']) ? $url['path'] : '/';

//3. Appeler le Controller lié à la route demandée
switch ($path) {
    case '/':
        displayHome();
        break;
    case $_ENV['profile'] :
        displayProfile();
        break;
        case $_ENV['library'] :
        displayLibrary();
        break;
    default:
        echo "erreur 404";
        break;
}
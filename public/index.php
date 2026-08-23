<?php
include('../env.php');
include("../app/tools/connect.php");
include("../app/controllers/homeController.php");
include("../app/controllers/userController.php");
include("../app/models/userRepository.php");
include("../app/models/user.php");
include("../app/controllers/libraryController.php");

//1. Récupérer l'url demandé par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//2. Récupérer le path de l'url : ceux qui vient après le nom de domaine

$path = trim($url['path'] ?? '/', '/');

$segments = $path === '' ? [] : explode('/', $path);

$resource = $segments[0] ?? '';
$param = $segments[1] ?? null;


//3. Appeler le Controller lié à la route demandée
switch ($resource) {
    case '':
        displayHome();
        break;
    case $_ENV['profile'] :
        $controller=new UserController(new UserRepository(connect_db()));
        $controller->displayProfile($param);
        
        break;
        case $_ENV['library'] :
        displayLibrary();
        break;
    default:
        echo "erreur 404";
        break;
}

// $url = parse_url($_SERVER['REQUEST_URI']);

// //2. Récupérer le path de l'url : ceux qui vient après le nom de domaine
// $path = isset($url['path']) ? $url['path'] : '/';

// //3. Appeler le Controller lié à la route demandée
// switch ($path) {
//     case '/':
//         displayHome();
//         break;
//     case $_ENV['profile'] :
//         $controller=new UserController(new UserRepository(connect_db()));
//         $controller->displayProfile("margot17");
        
//         break;
//         case $_ENV['library'] :
//         displayLibrary();
//         break;
//     default:
//         echo "erreur 404";
//         break;
// }
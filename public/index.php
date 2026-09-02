<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Controllers\BookController;
use Controllers\CommentController;
use Controllers\HomeController;
use Controllers\UserController;
use Controllers\LibraryController;
use Controllers\LoginController;
use Controllers\ProfileController;
use Models\Entities\Book;
use Models\Entities\Comment;
use Models\Entities\User;
use Models\Repository\Repository;
use Models\Repository\BookRepository;
use Models\Repository\CommentRepository;
use Models\Repository\UserRepository;
use View\Header;
use View\View;
use View\HomeView;
use Tools\DatabaseConnection;
use View\BookView;
use View\LibraryView;
use View\LoginView;
use View\UserView;

//1. Récupérer l'url demandé par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//2. Récupérer le path de l'url : ceux qui vient après le nom de domaine

$path = trim($url['path'] ?? '/', '/');

$segments = $path === '' ? [] : explode('/', $path);

$resource = $segments[0] ?? '';
$param = $segments[1] ?? null;
$action = $segments[2] ?? null;

//3. Appeler le Controller lié à la route demandée
switch ($resource) {
    case '':
        $controller=new HomeController(new UserRepository(new DatabaseConnection),new HomeView("Accueil | Booktopic",["../src/scripts/api.js"]));
        $controller->login();
        $controller->register();
        $controller->render();
        break;
    case $_ENV['logout'] :
        session_destroy();
        header('Location: /');
        exit;
    case $_ENV['user'] :
        $controller=new UserController(new UserRepository(new DatabaseConnection),new UserView("User | Booktopic",["../src/scripts/api.js","../scripts/book.js"]));
        $controller->render($param);
        break;
    case $_ENV['profile'] :
        $controller=new ProfileController(new UserRepository(new DatabaseConnection),new UserView("User | Booktopic",["../src/scripts/api.js","../scripts/book.js"]));
        $controller->render();
        break;
    case $_ENV['library'] :
        $controller=new LibraryController(new LibraryView("Bibliothèque | Booktopic",["../src/scripts/api.js","../scripts/book.js"]));
        $controller->render();
        break;
    case $_ENV['book'] :
        $controller=new BookController(new BookRepository(new DatabaseConnection),new CommentRepository(new DatabaseConnection),new BookView("Livre | Booktopic",["../src/scripts/api.js","../scripts/book.js"]));
        $controller->createComment(1);//temporaire 1=$param
        $controller->render(1);//temporaire 1=$param
        break;
    default:
        echo "erreur 404";
        break;
}
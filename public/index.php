<?php
session_start();

$_SESSION['id_user'] = 1;

require_once __DIR__ . '/../vendor/autoload.php';

// include('../env.php');
// include("../app/tools/DatabaseConnection.php");
include("../app/controllers/HomeController.php");
// include("../app/controllers/userController.php");
// include("../app/controllers/bookController.php");
// include("../app/controllers/commentController.php");
// include("../app/controllers/libraryController.php");
// include("../app/models/userRepository.php");
// include("../app/models/bookRepository.php");
// include("../app/models/commentRepository.php");
// include("../app/models/user.php");
// include("../app/models/book.php");
// include("../app/models/comment.php");

use Controllers\BookController;
use Controllers\CommentController;
use Controllers\HomeController;
use Controllers\UserController;
use Models\Entities\Book;
use Models\Entities\Comment;
use Models\Entities\User;
use Models\Repository\BookRepository;
use Models\Repository\CommentRepository;
use Models\Repository\UserRepository;
use View\Header;
use View\HomeView;
use Tools\DatabaseConnection;


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
        $controller=new HomeController(new HomeView);
        $controller->render();
        break;
    case $_ENV['profile'] :
        $controller=new UserController(new UserRepository(new DatabaseConnection));
        $controller->displayProfile($param);
        break;
    case $_ENV['library'] :
        displayLibrary();
        break;
    case $_ENV['book'] :
        if($action==="comment"){
            $addComment=new CommentController(new CommentRepository(new DatabaseConnection));
            $addComment->create(1);//temporaire 1=$param
        }
        $controller=new BookController(new BookRepository(new DatabaseConnection),new CommentRepository(new DatabaseConnection));
        $controller->displayBook(1);//temporaire 1=$param
        break;
    default:
        echo "erreur 404";
        break;
}
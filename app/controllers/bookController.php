<?php

namespace Controllers;

use Models\Entities\Comment;
use Models\Repository\BookRepository;
use Models\Repository\CommentRepository;
use View\View;

class BookController extends Controller{
    private BookRepository $bookRepository;
    private CommentRepository $commentRepository;

    public function __construct(BookRepository $bookRepository,CommentRepository $commentRepository,View $view){
        $this->bookRepository=$bookRepository;
        $this->commentRepository=$commentRepository;
        parent::__construct($view);
    }
    
    public function displayBook(int $id){
        $book=$this->bookRepository->findById($id);
        //book doesn't exists
        if ($book=== null){
            http_response_code(404);
            echo "Livre introuvable";
            return;
        }
        //add book's data to the view
        $this->getView()->setBook($book);
        $comments=$this->commentRepository->findByBookId($id);
        //add comments' data to the view
        $this->getView()->setComments($comments);
    }

    public function createComment(int $id_book): void{
        if(isset($_POST["addComment"])){
            $content = trim($_POST['comment'] ?? '');

        //verif connexion
        if (!isset($_SESSION['id_user'])) {
            http_response_code(401);
            echo 'Vous devez être connecté pour commenter.';
            return;
        }
        $id_user=$_SESSION['id_user'];

        //verif empty content
        if ($content === '') {
            http_response_code(400);
            echo 'Le commentaire ne peut pas être vide.';
            return;
        }

        //verif length content
        if (mb_strlen($content) > 255) {
            http_response_code(400);
            echo 'Le commentaire est trop long.';
            return;
        }

        //add comment in database
        $comment= new Comment($content,$id_book,$id_user,null,null,null,null);
        $this->commentRepository->create($comment); 

        //redirection
        header('Location: /book/' . $id_book);
        exit;
        }
    }
}
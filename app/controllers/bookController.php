<?php

namespace Controllers;

use Models\Repository\BookRepository;
use Models\Repository\CommentRepository;
use View\View;

class BookController{
    private BookRepository $bookRepository;
    private CommentRepository $commentRepository;
    private View $view;

    public function __construct(BookRepository $bookRepository,CommentRepository $commentRepository,View $view){
        $this->bookRepository=$bookRepository;
        $this->commentRepository=$commentRepository;
        $this->view=$view;
    }
    
    public function render(int $id){
        $book=$this->bookRepository->findById($id);
        if ($book=== null){
            http_response_code(404);
            echo "Livre introuvable";
            return;
        }
        $this->view->setBook($book);
        $comments=$this->commentRepository->findByBookId($id);
        $this->view->setComments($comments);
        $this->view->displayAll();
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
        $this->commentRepository->create($content,$id_user,$id_book); 

        //redirection
        header('Location: /book/' . $id_book);
        exit;
        }
    }

    public function deleteComment(int $id){
        if(isset($_POST["deleteComment"])){
            if(!isset($_SESSION["id_user"])){
                header('Location: /');
                exit;
            }
            $comment=$this->commentRepository->findById($id);
            if($comment===null){
                return;
            }
            if ($comment->getIdAuthor() !== $_SESSION['id_user']) {
                http_response_code(403);
                return;
            }
            $this->commentRepository->delete($id);
        }
    }
}
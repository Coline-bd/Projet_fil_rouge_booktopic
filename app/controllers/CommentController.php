<?php

namespace Controllers;

use Models\Repository\CommentRepository;
use View\View;

class commentController extends Controller{
    private CommentRepository $repository;

    public function __construct(View $view,CommentRepository $repository)
    {
        $this->repository=$repository;
        parent::__construct($view);
    }

    public function editComment(int $id){
        if(isset($_POST["editComment"])){
            //if empty session
            if(!isset($_SESSION["id_user"])){
                header('Location: /');
                exit;
            }
            $comment=$this->repository->findById($id);
            //if comment doesn't exist
            if($comment===null){
                return;
            }
            //if the user isn't the comment's author
            if ($comment->getIdAuthor() !== $_SESSION['id_user']) {
                http_response_code(403);
                return;
            }
            $content = trim($_POST['comment'] ?? '');
            //if empty content
            if ($content === '') {
                http_response_code(400);
                echo 'Le commentaire ne peut pas être vide.';
                return;
            }

            //check length content
            if (mb_strlen($content) > 255) {
                http_response_code(400);
                echo 'Le commentaire est trop long.';
                return;
            }
            $comment->setContent($content);
            //edit comment in database
            $this->repository->edit($comment);
            header('Location: /book/'.$comment->getIdBook());
            exit;
        }
    }

    public function deleteComment(int $id){
        if(isset($_POST["deleteComment"])){
            if(!isset($_SESSION["id_user"])){
                header('Location: /');
                exit;
            }
            $comment=$this->repository->findById($id);
            if($comment===null){
                return;
            }
            if ($comment->getIdAuthor() !== $_SESSION['id_user']) {
                http_response_code(403);
                return;
            }
            $this->repository->delete($id);
            header('Location: /book/'.$comment->getIdBook());
            exit;
        }
    }
}
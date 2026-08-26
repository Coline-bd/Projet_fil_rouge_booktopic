<?php

namespace Controllers;

use Models\Repository\CommentRepository;

class CommentController{
    private CommentRepository $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository=$commentRepository;
    }

    public function create(int $id_book): void{
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
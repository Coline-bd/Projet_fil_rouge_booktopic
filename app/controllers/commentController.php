<?php

class CommentController{
    private CommentRepository $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository=$commentRepository;
    }

    public function create(int $id_book): void{
    $content = trim($_POST['comment'] ?? '');

    if ($content === '') {
        http_response_code(400);
        echo 'Le commentaire ne peut pas être vide.';
        return;
    }

    if (mb_strlen($content) > 255) {
        http_response_code(400);
        echo 'Le commentaire est trop long.';
        return;
    }

    // Temporaire
    $id_user =1; //temporaire $_SESSION['id_user'];

    $this->commentRepository->create($content,$id_user,$id_book); //add comment in database

    header('Location: /book/' . $id_book);
    exit;
}
}
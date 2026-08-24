<?php

class CommentController{
    private CommentRepository $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository=$commentRepository;
    }

    public function create(int $idBook): void
{
    $content = trim($_POST['content'] ?? '');

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
    $idUser = $_SESSION['user_id'];

    $this->commentRepository->create(
        $content,
        $idBook,
        $idUser
    );

    header('Location: /books/' . $idBook);
    exit;
    }
}
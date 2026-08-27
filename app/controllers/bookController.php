<?php

namespace Controllers;

use Models\Repository\BookRepository;
use Models\Repository\CommentRepository;
use View\BookView;

class BookController{
    private BookRepository $bookRepository;
    private CommentRepository $commentRepository;
    private BookView $view;

    public function __construct(BookRepository $bookRepository,CommentRepository $commentRepository,BookView $view){
        $this->bookRepository=$bookRepository;
        $this->commentRepository=$commentRepository;
        $this->view=$view;
    }
    
    public function displayBook(int $id){
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
}
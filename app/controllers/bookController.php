<?php


class BookController{
    private BookRepository $bookRepository;
    private CommentRepository $commentRepository;

    public function __construct(BookRepository $bookRepository,CommentRepository $commentRepository){
        $this->bookRepository=$bookRepository;
        $this->commentRepository=$commentRepository;
    }
    
    public function displayBook(int $id){
        $book=$this->bookRepository->findById($id);
        if ($book=== null){
            http_response_code(404);
            echo "Utilisateur introuvable";
            return;
        }
        
        $comments=$this->commentRepository->findByBookId($id);
        require  "../app/view/book.php";
    }
}
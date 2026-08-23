<?php


class BookController{
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository){
        $this->bookRepository=$bookRepository;
    }
    
    public function displayBook(int $id){
        $book=$this->bookRepository->findById($id);
        if ($book=== null){
            http_response_code(404);
            echo "Utilisateur introuvable";
            return;
        }
        require  "../app/view/book.php";
    }

}
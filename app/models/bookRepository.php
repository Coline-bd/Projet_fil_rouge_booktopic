<?php

class BookRepository{
    private PDO $pdo;

    //construct
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findById(int $id): ?Book{
        try{
            $req=$this->pdo->prepare("SELECT b.id_book,cover_book,title_book,subtitle_book,published_at_book,summary_book,editor_book,author_book,GROUP_CONCAT(name_category) as categories FROM book as b 
            LEFT JOIN category_book as cb ON b.id_book=cb.id_book 
            LEFT JOIN category as c ON cb.id_category=c.id_category WHERE b.id_book=? 
            GROUP BY b.id_book;");
            $req->bindValue(1,$id,pdo::PARAM_INT);
            $req->execute();
            $data=$req->fetch(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $data["categories"]=$data["categories"]? explode(",", $data["categories"]): []; //if several categories
            $book= new Book($data["id_book"],$data["cover_book"],$data["title_book"],$data["subtitle_book"],$data["published_at_book"],$data["summary_book"],$data["editor_book"],$data["author_book"],$data["categories"]);
            return $book;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function findAll():?array{
        try{
            $req=$this->pdo->prepare("SELECT b.id_book,cover_book,title_book,subtitle_book,published_at_book,summary_book,editor_book,author_book,GROUP_CONCAT(name_category) as categories FROM book as b 
            LEFT JOIN category_book as cb ON b.id_book=cb.id_book 
            LEFT JOIN category as c ON cb.id_category=c.id_category 
            GROUP BY b.id_book;");
            $req->execute();
            $data=$req->fetchAll(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $books=[];
            foreach($data as $value){
                $value["categories"]=$value["categories"]? explode(",", $value["categories"]): []; //if several categories
                $books[]= new Book($value["id_book"],$value["cover_book"],$value["title_book"],$value["subtitle_book"],$value["published_at_book"],$value["summary_book"],$value["editor_book"],$value["author_book"],$value["categories"]);
            }
            return $books;

        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    
}

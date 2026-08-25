<?php

class BookRepository{
    private DatabaseConnection $connection;

    //construct
    public function __construct(DatabaseConnection $connection)
    {
        $this->connection = $connection;
    }

    public function findById(int $id): ?Book{
        try{
            $req=$this->connection->getConnection()->prepare("SELECT b.id_book,cover_book,title_book,subtitle_book,published_at_book,summary_book,editor_book,author_book,count(comment.id_comment) as nb_comment,GROUP_CONCAT(name_category) as categories FROM book as b 
            LEFT JOIN category_book as cb ON b.id_book=cb.id_book 
            LEFT JOIN category as c ON cb.id_category=c.id_category 
            JOIN comment ON b.id_book=comment.id_book
            WHERE b.id_book=? 
            GROUP BY b.id_book;");
            $req->bindValue(1,$id,pdo::PARAM_INT);
            $req->execute();
            $data=$req->fetch(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $data["categories"]=$data["categories"]? explode(",", $data["categories"]): []; //if several categories
            $book= new Book($data["id_book"],$data["cover_book"],$data["title_book"],$data["subtitle_book"],$data["published_at_book"],$data["summary_book"],$data["editor_book"],$data["author_book"],$data["categories"],$data["nb_comment"]);
            return $book;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function findAll():?array{
        try{
            $req=$this->connection->getConnection()->prepare("SELECT b.id_book,cover_book,title_book,subtitle_book,published_at_book,summary_book,editor_book,author_book,GROUP_CONCAT(name_category) as categories FROM book as b 
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
                $books[]= new Book($value["id_book"],$value["cover_book"],$value["title_book"],$value["subtitle_book"],$value["published_at_book"],$value["summary_book"],$value["editor_book"],$value["author_book"],$value["categories"],$value["nb_comment"]);
            }
            return $books;

        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    
}

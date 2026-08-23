<?php

class CommentRepository{
    private PDO $pdo;

    //construct
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findByBookId(int $id): ?array{
        try{
            $req=$this->pdo->prepare("SELECT c.id_comment,date_comment,content_comment,c.id_user,u.login_user FROM comment as c 
            JOIN user as u ON c.id_user=u.id_user 
            JOIN book as u ON c.id_book=b.id_book
            WHERE =c.id_book=?
            ORDER BY date_comment DESC");
            $req->bindValue(1,$id,pdo::PARAM_INT);
            $req->execute();
            $data=$req->fetch(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $comments=[];
            foreach($data as $value){
            $comments[]= new Comment($value["id_comment"],$value["date_comment"],$value["content_comment"],$value["login_user"]);
            }
            return $comments;
            
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
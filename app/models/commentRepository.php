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
            $req=$this->pdo->prepare("SELECT c.id_comment,date_comment,content_comment,c.id_user,u.login_user,u.picture_user FROM comment as c 
            JOIN user as u ON c.id_user=u.id_user 
            JOIN book as b ON c.id_book=b.id_book
            WHERE c.id_book=?
            ORDER BY date_comment DESC");
            $req->bindValue(1,$id,pdo::PARAM_INT);
            $req->execute();
            $data=$req->fetchAll(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $comments=[];
            foreach($data as $value){
                $comments[]= new Comment($value["id_comment"],$value["date_comment"],$value["content_comment"],$value["id_user"],$value["login_user"],$value["picture_user"]);
            }
            return $comments;
            
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function create(string $content,int $id_user,int $id_book):void{
        try{
            $req=$this->pdo->prepare("INSERT INTO `comment`(content_comment,id_user,id_book) 
            VALUE (?,?,?);"
            );
            $req->bindValue(1,$content);
            $req->bindValue(2,$id_user,pdo::PARAM_INT);
            $req->bindValue(3,$id_book,pdo::PARAM_INT);
            $req->execute();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}

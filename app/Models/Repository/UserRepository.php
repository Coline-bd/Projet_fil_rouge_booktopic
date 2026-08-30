<?php

namespace Models\Repository;

use Models\Entities\User;
use PDO;
use Exception;

class UserRepository extends Repository{

    //methods
    public function findById(int $id): ?User{
        try{
            $req=$this->getDatabase()->getConnection()->prepare("SELECT u.id_user,firstname_user,login_user,lastname_user,picture_user,presentation_user,password_user,mail_user,birthdate_user,u.id_role,GROUP_CONCAT(name_category) as categories FROM `user` as u 
            LEFT JOIN user_category as uc ON u.id_user=uc.id_user 
            LEFT JOIN category as c ON uc.id_category=c.id_category WHERE u.id_user=? 
            GROUP BY u.id_user;");
            $req->bindValue(1,$id,pdo::PARAM_INT);
            $req->execute();
            $data=$req->fetch(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $data["categories"]=$data["categories"]? explode(",", $data["categories"]): []; //if several categories
            $user= new User($data["id_user"],$data["firstname_user"],$data["lastname_user"],$data["login_user"],$data["mail_user"],$data["birthdate_user"],$data["password_user"],$data["picture_user"],$data["presentation_user"],$data["categories"],$data["id_role"]);
            return $user;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function findByLogin(string $login): ?User{
        try{
            $req=$this->getDatabase()->getConnection()->prepare("SELECT u.id_user,firstname_user,login_user,lastname_user,picture_user,presentation_user,mail_user,password_user,birthdate_user,u.id_role,GROUP_CONCAT(name_category) as categories FROM `user` as u 
            LEFT JOIN user_category as uc ON u.id_user=uc.id_user 
            LEFT JOIN category as c ON uc.id_category=c.id_category WHERE u.login_user=? 
            GROUP BY u.id_user;");
            $req->bindValue(1,$login);
            $req->execute();
            $data=$req->fetch(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;
            }
            $data["categories"]=$data["categories"]? explode(",", $data["categories"]): []; //if several categories
            $user= new User($data["id_user"],$data["firstname_user"],$data["lastname_user"],$data["login_user"],$data["mail_user"],$data["birthdate_user"],$data["picture_user"],$data["password_user"],$data["presentation_user"],$data["categories"],$data["id_role"]);
            return $user;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function findAll():?array{
        try{
            $req=$this->getDatabase()->getConnection()->prepare("SELECT u.id_user,firstname_user,login_user,lastname_user,picture_user,presentation_user,mail_user,birthdate_user,u.id_role,GROUP_CONCAT(name_category) as categories FROM `user` as u 
            LEFT JOIN user_category as uc ON u.id_user=uc.id_user 
            LEFT JOIN category as c ON uc.id_category=c.id_category
            GROUP BY u.id_user");
            $req->execute();
            $data=$req->fetchAll(pdo::FETCH_ASSOC);
            
            if (empty($data)){
                return null;}

            $users=[];
            foreach($data as $value){
                $value["categories"]=$value["categories"]? explode(",", $value["categories"]): []; //if several categories
                $users[]=new User($value["id_user"],$value["firstname_user"],$value["lastname_user"],$value["login_user"],$value["mail_user"],$value["birthdate_user"],$value["picture_user"],$value["password_user"],$value["presentation_user"],$value["categories"],$value["id_role"]);
            }
            return $users;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}


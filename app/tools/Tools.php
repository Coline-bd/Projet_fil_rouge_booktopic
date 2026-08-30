<?php 

namespace Tools;

class Tools{

    public static function sanitize(string $data):string{
        return htmlentities(strip_tags(stripslashes(trim($data))));
    }

    public static function passwordHash(?string $password):array{
        if(empty($password)){
            return ['message' => "Mot de passe invalide", 'code' => 'invalide'];
        }
        return ['message' => password_hash($password,PASSWORD_DEFAULT), 'code' => 'correct'];
    }
}
<?php

namespace Controllers;

use Models\Repository\UserRepository;

class UserController{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository=$userRepository;
    }
    
    public function displayProfile(string $login){
        $user=$this->userRepository->findByLogin($login);
        if ($user=== null){
            http_response_code(404);
            echo "Utilisateur introuvable";
            return;
        }
        require  "../app/view/profile.php";
    }

}





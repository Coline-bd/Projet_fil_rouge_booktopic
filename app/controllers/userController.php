<?php

namespace Controllers;

use Models\Repository\UserRepository;
use View\UserView;

class UserController{
    private UserRepository $userRepository;
    private UserView $view;

    public function __construct(UserRepository $userRepository,UserView $view){
        $this->userRepository=$userRepository;
        $this->view=$view;
    }
    
    public function render(string $login){
        $user=$this->userRepository->findByLogin($login);
        if ($user=== null){
            http_response_code(404);
            echo "Utilisateur introuvable";
            return;
        }
        $this->view->setUser($user);
        $this->view->displayAll();
    }

}





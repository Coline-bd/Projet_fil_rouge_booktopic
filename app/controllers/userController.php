<?php

namespace Controllers;

use Models\Repository\UserRepository;
use View\View;

class UserController{
    private UserRepository $userRepository;
    private View $view;

    public function __construct(UserRepository $userRepository,View $view){
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





<?php

namespace Controllers;

use Models\Repository\Repository;
use View\View;

class UserController{
    private Repository $repository;
    private View $view;

    public function __construct(Repository $repository,View $view){
        $this->repository=$repository;
        $this->view=$view;
    }
    
    public function render(string $login){
        $user=$this->repository->findByLogin($login);
        if ($user=== null){
            http_response_code(404);
            echo "Utilisateur introuvable";
            return;
        }
        $this->view->setUser($user);
        $this->view->displayAll();
    }

    public function profile(){
        $user=$this->repository->findByLogin($_SESSION["pseudo_user"]);
        $this->view->setUser($user);
        $this->view->displayAll();
    }

}





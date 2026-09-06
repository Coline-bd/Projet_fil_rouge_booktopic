<?php

namespace Controllers;

use Models\Repository\Repository;
use View\View;

class UserController extends Controller{
    private Repository $repository;

    public function __construct(Repository $repository,View $view){
        $this->repository=$repository;
        parent::__construct($view);
    }
    
    public function displayUser(string $login){
        $user=$this->repository->findByLogin($login);
        if ($user=== null){
            http_response_code(404);
            echo "Utilisateur introuvable";
            return;
        }
        $this->getView()->setUser($user);
    }

}





<?php

namespace Controllers;

use Models\Repository\Repository;
use View\View;

class ProfileController extends Controller{
    private Repository $repository;

    public function __construct(Repository $repository,View $view){
        $this->repository=$repository;
        parent::__construct($view);
    }

    public function displayProfile(){
        if(empty($_SESSION["id_user"])){
            header('Location: /');
            exit;
        }
        else {
            $user=$this->repository->findByLogin($_SESSION["pseudo_user"]);
            $this->getView()->setUser($user);
        }
    }
}

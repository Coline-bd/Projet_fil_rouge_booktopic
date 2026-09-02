<?php

namespace Controllers;

use Models\Repository\Repository;
use View\View;

class ProfileController{
    private Repository $repository;
    private View $view;

    public function __construct(Repository $repository,View $view){
        $this->repository=$repository;
        $this->view=$view;
    }

    public function render(){
        if(empty($_SESSION["id_user"])){
            header('Location: /');
            exit;
        }
        else {
            $user=$this->repository->findByLogin($_SESSION["pseudo_user"]);
        $this->view->setUser($user)->displayAll();
        }
    }
}

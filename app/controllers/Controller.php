<?php

namespace Controllers;

use Models\Repository\Repository;
use View\View;

class Controller{
    private View $view;

    public function __construct(View $view){
        $this->view=$view;
    }

    public function render(){
        $this->view->displayAll();
    }

    public function getView(){
        return $this->view;
    }
}
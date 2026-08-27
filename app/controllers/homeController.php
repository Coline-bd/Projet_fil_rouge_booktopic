<?php


namespace Controllers;

use View\HomeView;

class HomeController{
    // private Model $model;
    private HomeView $view;

    public function __construct(HomeView $view)
    {
        $this->view=$view;
    }

    public function render(){
        $this->view->displayAll();
    }
}


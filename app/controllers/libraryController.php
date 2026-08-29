<?php

namespace Controllers;

use View\LibraryView;

class LibraryController{
    // private Model $model;
    private LibraryView $view;

    public function __construct(LibraryView $view)
    {
        $this->view=$view;
    }

    public function render(){
        $this->view->displayAll();
    }
}
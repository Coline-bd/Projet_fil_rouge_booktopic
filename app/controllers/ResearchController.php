<?php

namespace Controllers;
use Services\GoogleBookService;
use View\View;

class ResearchController extends Controller{
    private GoogleBookService $bookService;

    public function __construct(View $view, GoogleBookService $bookService)
    {
        parent::__construct($view);
        $this->bookService=$bookService;
    }
    
    public function search(string $query): void
    {
        $results = $this->bookService->search($query);

        header('Content-Type: application/json');

        echo json_encode($results);
    }
}
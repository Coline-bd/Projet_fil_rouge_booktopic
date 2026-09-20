<?php

namespace Controllers;

use InvalidArgumentException;
use Models\Services\GoogleBookService;
use RuntimeException;
use View\View;

class ResearchController extends Controller{
    private GoogleBookService $bookService;

    public function __construct(View $view, GoogleBookService $bookService)
    {
        parent::__construct($view);
        $this->bookService=$bookService;
    }
    
    public function search(): void
    {
        $query=$_GET['q'] ?? "";
        header('Content-Type: application/json; charset=utf-8');

        try {
            $results = $this->bookService->search($query);
            echo json_encode($results, JSON_THROW_ON_ERROR);
        } catch (InvalidArgumentException $exception) {
            http_response_code(400);
            echo json_encode(['error' => $exception->getMessage()]);
        } catch (RuntimeException $exception) {
            error_log($exception->getMessage());
            http_response_code(502);
            echo json_encode(['error' => 'Le service de recherche est temporairement indisponible.']);
        } catch (\JsonException $exception) {
            error_log($exception->getMessage());
            http_response_code(500);
            echo json_encode(['error' => 'Impossible de generer la reponse.']);
        }
    }
}


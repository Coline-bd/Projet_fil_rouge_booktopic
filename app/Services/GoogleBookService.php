<?php

namespace Services; 
use RuntimeException;

class GoogleBookService{
    private string $apiKey;

    public function __construct()
    {
        $this->apiKey=$_ENV["API_KEY"];
    }

    public function search(string $query):array{
        $url='https://www.googleapis.com/books/v1/volumes'
        . '?q=' . urlencode($query)
        . '&key=' . $this->apiKey;

        $response=file_get_contents($url);

        if ($response === false) {
        throw new RuntimeException('Impossible de contacter Google Books API.');
}

    $data = json_decode($response, true);

    if ($data === null) {
        throw new RuntimeException(
            'Réponse JSON invalide de Google Books API.'
        );
    }

    return $data;
    }
}
<?php

class Book{
    private int $id_book;
    private ?string $cover_book;
    private string $title_book;
    private ?string $subtitle_book;
    private string $published_at_book;
    private ?string $summary_book;
    private string $editor_book;
    private string $author_book;
    private ?array $categories;

    public function __construct(
        int $id_book,
        ?string $cover_book,
        string $title_book,
        ?string $subtitle_book,
        string $published_at_book,
        ?string $summary_book,
        string $editor_book,
        string $author_book,
        ?array $categories
        )
        {
        $this->id_book=$id_book;
        $this->cover_book=$cover_book;
        $this->title_book=$title_book;
        $this->subtitle_book=$subtitle_book;
        $this->published_at_book=$published_at_book;
        $this->summary_book=$summary_book;
        $this->editor_book=$editor_book;
        $this->author_book=$author_book;
        $this->categories=$categories;
        }

    public function getId(): int
    {
        return $this->id_book;
    }

    public function getCover(): string
    {
        return $this->cover_book;
    }

    public function getTitle(): string
    {
        return $this->title_book;
    }

    public function getSubTitle(): string
    {
        return $this->subtitle_book;
    }

    public function getPublishDate(): string
    {
        return $this->published_at_book;
    }

    public function getSummary(): string
    {
        return $this->summary_book;
    }

    public function getEditor(): string
    {
        return $this->editor_book;
    }

    public function getAuthor(): string
    {
        return $this->author_book;
    }

    public function getCategory(): array
    {
        return $this->categories;
    }
}
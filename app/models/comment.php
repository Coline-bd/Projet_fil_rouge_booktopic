<?php 

class Comment{
    private int $id_comment;
    private string $date_comment;
    private string $content_comment;
    private int $id_user;

    public function __construct(
        int $id_comment,
        string $date_comment,
        string $content_comment,
        int $id_user
    )
    {
        $this->id_comment=$id_comment;
        $this->date_comment=$date_comment;
        $this->content_comment=$content_comment;
        $this->id_user=$id_user;
    }

    public function getId(): int
    {
        return $this->id_comment;
    }
    public function getDate(): string
    {
        return $this->date_comment;
    }
    public function getContent(): string
    {
        return $this->content_comment;
    }
    public function getUser(): int
    {
        return $this->id_user;
    }
}
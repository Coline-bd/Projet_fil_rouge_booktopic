<?php 

namespace Models\Entities;

use DateTimeImmutable;

class Comment{
    private int $id_comment;
    private DateTimeImmutable $date_comment;
    private string $content_comment;
    private int $id_user;
    private string $login_user;
    private ?string $picture_user;

    public function __construct(
        int $id_comment,
        DateTimeImmutable $date_comment,
        string $content_comment,
        int $id_user,
        string $login_user,
        ?string $picture_user
    )
    {
        $this->id_comment=$id_comment;
        $this->date_comment=$date_comment;
        $this->content_comment=$content_comment;
        $this->id_user=$id_user;
        $this->login_user=$login_user;
        $this->picture_user=$picture_user;
    }

    public function getId(): int
    {
        return $this->id_comment;
    }
    public function getDate(): DateTimeImmutable
    {
        return $this->date_comment;
    }
    public function getContent(): string
    {
        return $this->content_comment;
    }
    public function getIdAuthor(): int
    {
        return $this->id_user;
    }
    public function getLoginAuthor():string
    {
        return $this->login_user;
    }
    public function getPictureAuthor():string
    {
        return $this->picture_user;
    }
}
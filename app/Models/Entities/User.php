<?php

namespace Models\Entities;

class User
{
    //attributs
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $login;
    private string $email;
    private string $birthdate;

    private ?string $picture;
    private ?string $presentation;

    private int $roleId;

    private ?array $categories;

    //construct
    public function __construct(
        int $id,
        string $firstname,
        string $lastname,
        string $login,
        string $email,
        string $birthdate,
        ?string $picture,
        ?string $presentation,
        ?array $categories,
        int $roleId
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->login = $login;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->picture = $picture;
        $this->presentation = $presentation;
        $this->categories = $categories;
        $this->roleId = $roleId;
    }

    //getter and setter
    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategory(string $category): void
    {
        $this->categories[] = $category;
    }
}

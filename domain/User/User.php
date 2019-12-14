<?php


namespace Domain\User;


class User
{
    private $id;
    private $login;
    private $fio;
    private $email;

    public function __construct($id, $login, $fio, $email)
    {
        $this->id = $id;
        $this->login = $login;
        $this->fio = $fio;
        $this->email = $email;
    }


    public function getId() {
        return $this->id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getFio() {
        return $this->fio;
    }

    public function getEmail() {
        return $this->email;
    }
}
<?php

namespace App\Core\User\Model;

use App\Core\Shared\Model;

class User extends Model
{
    private int $id;
    private string $name;
    private string $email;
    private bool $password;

    public function __construct($params)
    {
        $this->validateParams($params);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
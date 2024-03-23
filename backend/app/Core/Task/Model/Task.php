<?php

namespace App\Core\Task\Model;

use App\Core\Shared\Model;

class Task extends Model
{
    private int $id;
    private string $name;
    private string $description;
    private bool $finished;
    private int $user_id;

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

    public function getDescription()
    {
        return $this->description;
    }

    public function getFinished()
    {
        return $this->finished;
    }

    public function getUserId()
    {
        return $this->user_id;
    }
}
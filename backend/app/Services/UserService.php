<?php

namespace App\Services;

use App\Core\User\Services\Interfaces\UserRepository;

class UserService extends AbstractService
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
}
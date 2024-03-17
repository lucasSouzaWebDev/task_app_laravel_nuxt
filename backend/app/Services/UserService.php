<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService extends AbstractService
{
    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
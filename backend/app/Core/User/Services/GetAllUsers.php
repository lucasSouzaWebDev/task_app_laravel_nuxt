<?php

namespace App\Core\User\Services;

use \Exception;
use App\Core\User\Services\Interfaces\UserRepository;

class GetAllUsers
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute()
    {
        $allUsers = $this->repository->getAll();
        if(empty($allUsers)){
            return throw new Exception('No users were found');
        }

        return $allUsers;
    }
}
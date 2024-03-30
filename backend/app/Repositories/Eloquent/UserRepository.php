<?php

namespace App\Repositories\Eloquent;

use App\Core\User\Services\Interfaces\UserRepository as UserRepositoryInterface;
use App\Models\User;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
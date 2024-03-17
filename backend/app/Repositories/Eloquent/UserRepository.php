<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    public function __construct(User $task)
    {
        parent::__construct($task);
    }
}
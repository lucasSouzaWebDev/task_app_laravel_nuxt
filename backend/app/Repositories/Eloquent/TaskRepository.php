<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Models\Task;
use Illuminate\Support\Facades\Cache;

class TaskRepository extends AbstractRepository implements TaskRepositoryInterface
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
    }
}
<?php

namespace App\Repositories\Eloquent;

use App\Core\Task\Services\Interfaces\TaskRepository as TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository extends AbstractRepository implements TaskRepositoryInterface
{
    public function __construct(Task $entity)
    {
        parent::__construct($entity);
    }
}
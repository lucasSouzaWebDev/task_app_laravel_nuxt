<?php

namespace App\Services;

use App\Core\Task\Services\GetAllTasks;
use App\Models\Task;
use App\Repositories\Eloquent\TaskRepository;

class TaskService
{
    private $repository;
    public function __construct()
    {
        $model = new Task();
        $this->repository = new TaskRepository($model);
    }

    public function create(array $data)
    {
        $data['user_id'] = 1;
        //return $this->repository->create($data);
    }

    public function getAll()
    {
        $allTasks = (new GetAllTasks($this->repository))->execute();
        return $allTasks;
    }
}
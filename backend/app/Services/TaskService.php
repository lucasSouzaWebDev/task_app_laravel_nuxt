<?php

namespace App\Services;

use App\Core\Task\Services\CreateTask;
use App\Core\Task\Services\DeleteTask;
use App\Core\Task\Services\FindTask;
use App\Core\Task\Services\GetAllTasks;
use App\Core\Task\Services\UpdateTask;
use App\Models\Task;
use App\Repositories\Eloquent\TaskRepository;

class TaskService extends AbstractService
{
    private $repository;
    
    public function __construct()
    {
        $this->repository = new TaskRepository(new Task);
    }

    public function getAll()
    {
        $allTasks = (new GetAllTasks($this->repository))->execute();
        return $allTasks;
    }

    public function find(int $id)
    {
        $task = (new FindTask($this->repository, $id))->execute();
        return $task;
    }

    public function create(array $data)
    {
        $data['user_id'] = 2;
        $task = (new CreateTask($this->repository, $data))->execute();
        return $task;
    }

    public function update(int $id, array $data)
    {
        $task = (new UpdateTask($this->repository, $id, $data))->execute();
        return $task;
    }

    public function delete(int $id)
    {
        $task = (new DeleteTask($this->repository, $id))->execute();
        return $task;
    }
}
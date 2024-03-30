<?php

namespace App\Core\Task\Services;

use App\Core\Shared\UseCase;
use App\Core\Task\Services\Interfaces\TaskRepository;

class DeleteTask implements UseCase
{
    private TaskRepository $repository;
    private int $id;

    public function __construct(TaskRepository $repository, int $id)
    {
        $this->repository = $repository;
        $this->id = $id;
    }

    public function execute()
    {
        $task = (new FindTask($this->repository, $this->id))->execute();
        return $this->repository->delete($task);
    }
}
<?php

namespace App\Core\Task\Services;

use App\Core\Shared\UseCase;
use App\Core\Task\Services\Interfaces\TaskRepository;

class CreateTask implements UseCase
{
    private TaskRepository $repository;
    private array $data;

    public function __construct(TaskRepository $repository, $data)
    {
        $this->repository = $repository;
        $this->data = $data;
    }

    public function execute()
    {
        $task = $this->repository->create($this->data);
        return $task;
    }
}
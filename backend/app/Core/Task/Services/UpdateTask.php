<?php

namespace App\Core\Task\Services;

use App\Core\Shared\UseCase;
use App\Core\Task\Services\Interfaces\TaskRepository;

class UpdateTask implements UseCase
{
    private TaskRepository $repository;
    private int $id;
    private array $data;

    public function __construct(TaskRepository $repository, int $id, array $data)
    {
        $this->repository = $repository;
        $this->id = $id;
        $this->data = $data;
    }

    public function execute()
    {
        $task = (new FindTask($this->repository, $this->id))->execute();
        return $this->repository->update($task, $this->data);
    }
}
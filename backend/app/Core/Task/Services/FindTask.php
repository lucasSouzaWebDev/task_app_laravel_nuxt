<?php

namespace App\Core\Task\Services;

use App\Core\Shared\Exceptions\NotFoundException;
use App\Core\Shared\UseCase;
use App\Core\Task\Services\Interfaces\TaskRepository;

class FindTask implements UseCase
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
        $task = $this->repository->find($this->id);
        if(empty($task)){
            throw new NotFoundException('Task');
        }

        return $task;
    }
}
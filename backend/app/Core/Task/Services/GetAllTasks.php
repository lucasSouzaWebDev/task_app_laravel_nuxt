<?php

namespace App\Core\Task\Services;

use \Exception;
use App\Core\Task\Services\Interfaces\TaskRepository;

class GetAllTasks
{
    private TaskRepository $repository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute()
    {
        $allTasks = $this->repository->getAll();
        if(empty($allTasks)){
            return throw new Exception('No tasks were found');
        }

        return $allTasks;
    }
}
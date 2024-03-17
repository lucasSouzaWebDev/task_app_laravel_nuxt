<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskController extends AbstractController
{
    protected $service;

    public function __construct(TaskService $service)
    {
        parent::__construct($service);
        $this->service = $service;
    }

    public function store(StoreTaskRequest $request)
    {
        $category = $this->service->create($request->all());
        return new JsonResource($category);
    }

    public function update(UpdateTaskRequest $request, $id)
    {
        $category = $this->service->update($id, $request->all());
        return $category;
    }
}
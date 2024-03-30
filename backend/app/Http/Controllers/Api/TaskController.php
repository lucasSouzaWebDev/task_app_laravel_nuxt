<?php

namespace App\Http\Controllers\Api;

use App\Core\Shared\Exceptions\NotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskController extends Controller
{
    protected $service;

    public function __construct(TaskService $service)
    {
        //parent::__construct($service);
        $this->service = $service;
    }

    public function index()
    {
        $tasks = $this->service->getAll();
        return JsonResource::collection($tasks);
    }

    public function show($id)
    {
        try{
            $task = $this->service->find($id);
            return new JsonResource($task);
        } catch(NotFoundException $e){
            return response()->json(['error' => $e->getMessage()], 404);
        }
        
    }

    public function store(StoreTaskRequest $request)
    {
        $task = $this->service->create($request->all());
        return new JsonResource($task);
    }

    public function update(UpdateTaskRequest $request, $id)
    {
        $task = $this->service->update($id, $request->all());
        return $task;
    }

    public function destroy($id)
    {
        $category = $this->service->delete($id);
        return $category;
    }
}

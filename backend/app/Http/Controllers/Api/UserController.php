<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends AbstractController
{
    protected $service;

    public function __construct(UserService $service)
    {
        parent::__construct($service);
        $this->service = $service;
    }

    public function store(StoreUserRequest $request)
    {
        $category = $this->service->create($request->all());
        return new JsonResource($category);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $category = $this->service->update($id, $request->all());
        return $category;
    }
}

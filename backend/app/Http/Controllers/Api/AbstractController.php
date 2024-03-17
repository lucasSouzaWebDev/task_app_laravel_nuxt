<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AbstractService;
use Illuminate\Http\Resources\Json\JsonResource;

class AbstractController extends Controller
{
    protected $abstractService;

    public function __construct(AbstractService $abstractService)
    {
        $this->abstractService = $abstractService;
    }

    public function index()
    {
        $categories = $this->abstractService->getAll();
        return JsonResource::collection($categories);
    }

    public function show($id)
    {
        $category = $this->abstractService->find($id);
        return new JsonResource($category);
    }

    public function destroy($id)
    {
        $category = $this->abstractService->destroy($id);
        return $category;
    }
}

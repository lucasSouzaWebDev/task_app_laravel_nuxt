<?php

namespace App\Services;

use App\Core\Task\Services\Interfaces\TaskRepository;

abstract class AbstractService
{
    protected $entityRepository;

    public function __construct(TaskRepository $resourceRepository)
    {
        $this->entityRepository = $resourceRepository;
    }

    public function getAll()
    {
        return $this->entityRepository->getAll();
    }

    public function find(int $id)
    {
        return $this->entityRepository->find($id);
    }

    public function create(array $data)
    {
        return $this->entityRepository->create($data);
    }

    public function update(int $id, array $categorie)
    {
        $entity = $this->entityRepository->find($id);

        if (!$entity) {
            return response()->json(['message' => 'Register Not Found.'], 404);
        }

        $this->entityRepository->update($entity, $categorie);
        return response()->json([], 204);
    }

    public function destroy(int $id)
    {
        $entity = $this->entityRepository->find($id);
        if (!$entity) {
            return response()->json(['message' => 'Register Not Found.'], 404);
        }

        $this->entityRepository->destroy($entity);
        return response()->json(['message' => 'Register Deleted.'], 204);
    }
}
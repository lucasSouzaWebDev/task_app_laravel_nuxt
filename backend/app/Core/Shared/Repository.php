<?php

namespace App\Core\Shared;

interface Repository
{
    public function getAll();
    public function find(int $id);
    public function create(array $data);
    public function update(object $entity, array $data);
    public function destroy(object $entity);
}
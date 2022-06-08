<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function setModel($model);

    public function getModel();

    public function getAll($select = ['*'], array $condition = []);

    public function store(array $attributes);

    public function update($id, array $attributes);

    public function find($id);

    public function delete($id);
}

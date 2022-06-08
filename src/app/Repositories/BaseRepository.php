<?php


namespace App\Repositories;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    abstract function getModel();

    public function setModel($model)
    {
        $this->model = app()->make($this->getModel());
    }


    public function getAll($select = ['*'], array $condition = [])
    {
        return $this->getModel()
            ->all($select);
    }

    public function store(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        
    }

    public function find($id)
    {
    }

    public function delete($id)
    {
    }
}

<?php


namespace App\Repository\Eloquent;


use App\Repository\Contract\PostRepositoryInterface;

abstract class PostEloquentRepository implements PostRepositoryInterface
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function create($obj)
    {
        $obj->save();
    }

    public function edit($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }
}

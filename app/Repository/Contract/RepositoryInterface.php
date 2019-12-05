<?php


namespace App\Repository;


interface RepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create($obj);
    public function edit($obj);
    public function destroy($obj);
}

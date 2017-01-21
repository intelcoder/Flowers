<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class Repository implements RepositoryInterface {

  abstract function model();

  public function getAll(){
    return $this->model->all();
  }

  public function getById($id){
    return $this->model->find($id);
  }

  public function create(array $attributes){
    return $this->model->create($attributes);
  }

  public function update($id, array $attributes){
    $customer = $this->model->findOrFail($id);
    return $customer->update($attributes);
  }
  public function delete($id){
      $customer = $this->model->findOrFail($id);
      return $customer->delete($id);
  }

  public function with(array $relation){
    return $this->model->with(implode(',', $relation))->get();
  }

}

 ?>

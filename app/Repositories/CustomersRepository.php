<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Customers;

class CustomersRepository implements Repository {

  private $model;

  public function __construct__(Customers $customers){
    $this->model = $customers;
  }

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
}

?>

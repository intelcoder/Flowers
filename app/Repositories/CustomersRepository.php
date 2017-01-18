<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use App\Models\Customers;

class CustomersRepository implements RepositoryInterface {

  private $model;

  public function __construct__(Customers $customers){
    $this->model = $customers;
  }

  public function getAll(){
    dd('test');

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

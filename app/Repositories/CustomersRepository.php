<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Customers;

class CustomersRepository extends Repository {

  protected $model;

  public function model(){
    return 'App\Models\Customers';
  }

  public function __construct(){
    $this->model = \App::make($this->model());
  }
}

?>

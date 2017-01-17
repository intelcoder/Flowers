<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Customers;

class CustomersController extends Controller
{

  public function index(){
    $customers = Customers::all();
    $data = array( 'customers' => $customers);
    dd($data);
    return View::make("customers")->with($data);
  }
}

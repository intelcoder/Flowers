<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'customer_id';
    protected $table = 'customers';
    protected $dates = ['deleted_at'];


    public function address(){
      return $this->hasOne('App\Models\address','address_id','customer_id');
    }


}

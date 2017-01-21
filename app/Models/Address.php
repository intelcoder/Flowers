<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';


    public function customers () {
        return $this->belongsTo(Customers::class);
    }

}

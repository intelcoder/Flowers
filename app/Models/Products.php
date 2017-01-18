<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    protected $table = 'products';

    public function colors() {
      return $this->hasMany('App\Models\Colors','color_id','product_id');
    }
}

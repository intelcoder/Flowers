<?php

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Colors;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      factory(Products::class, 100)->create()->each(function($p) {
        $p->colors()->saveMany(factory(Colors::class,2)->make());
      });
    }
}

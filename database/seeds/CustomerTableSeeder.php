<?php
use Illuminate\Database\Seeder;
use App\Models\Customers;
use App\Models\Address;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Customers::class, 100)->create()->each(function($c) {
        $c->address()->save(factory(Address::class)->make());
      });
    }
}

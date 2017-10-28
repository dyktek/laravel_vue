<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
        	\App\Product::create([
        		'name' => 'Kon',
		        'price' => rand(100, 10000)
	        ]);
        }
    }
}

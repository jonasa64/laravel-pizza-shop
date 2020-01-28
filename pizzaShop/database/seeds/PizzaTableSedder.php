<?php

use Illuminate\Database\Seeder;
use App\Pizza;
class PizzaTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $pizzas = [
        ['name' => ' Margherita', 'price' => 49.00],
        ['name' => ' Vesuvio', 'price' => 60.00],
        ['name' => '  Salami', 'price' => 62.00],
        ['name' => 'Capricciosa', 'price' => 62.00],
        ['name' => 'Hawaii', 'price' => 62.00],
        ['name' => 'Bolognese', 'price' => 62.00],
        ['name' => 'American', 'price' => 62.00],
        ['name' => 'Ramo', 'price' => 64.00],
        ['name' => 'O solo mio', 'price' => 64.00],
        ['name' => 'Eva', 'price' => 64.00],
        ['name' => 'Napoli', 'price' => 64.00],
        ['name' => 'Chicken', 'price' => 67.00],

    ];

    foreach($pizzas as $pizza){
        Pizza::create($pizza);
    }

    }
}

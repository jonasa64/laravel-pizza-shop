<?php

use Illuminate\Database\Seeder;
use App\Ingredient;
class IngredientTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $ingredients = [
        ['name' => 'tomato sauce'],
        ['name' => 'cheese'],
        ['name' => 'ham'],
        ['name' => 'pepperoni'],
        ['name' => 'mushroom'],
        ['name' => 'Pineapples'],
        ['name' => 'bolognese sauce'],
        ['name' => 'onion'],
        ['name' => 'ground beef'],
        ['name' => ' chili'],
        ['name' => 'bacon'],
        ['name' => 'chicken'],
        ['name' => 'green pepper'],
        ['name' => 'kebab'],
        ['name' => 'paprika'],
        ['name' => 'garlic'],
        ['name' => 'strip of flesh'],
        ['name' => 'bearnaise'],
        ['name' => 'cocktail sausages'],
        ['name' => 'olive'],
        ['name' => 'tuna'],
        ['name' => 'shrimp'],
        ['name' => 'gorgonzola']
    ];
foreach($ingredients as $ingredient){
    Ingredient::create($ingredient);
}

    }
}

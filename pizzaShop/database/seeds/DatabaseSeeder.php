<?php

use Illuminate\Database\Seeder;
use App\Ingredient;
use App\Pizza;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PizzaTableSedder::class);
         $this->call(IngredientTableSedder::class);

        $pizza1 = Pizza::find(1);
        $pizza1->ingredients()->attach(1);
        $pizza1->ingredients()->attach(2);

        $pizza2 = Pizza::find(2);
        $pizza2->ingredients()->attach(1);
        $pizza2->ingredients()->attach(2);
        $pizza2->ingredients()->attach(3);

        $pizza3 = Pizza::find(3);
        $pizza3->ingredients()->attach(1);
        $pizza3->ingredients()->attach(2);
        $pizza3->ingredients()->attach(4);

        $pizza4 = Pizza::find(4);
        $pizza4->ingredients()->attach(1);
        $pizza4->ingredients()->attach(2);
        $pizza4->ingredients()->attach(3);
        $pizza4->ingredients()->attach(5);

        $pizza5 = Pizza::find(5);
        $pizza5->ingredients()->attach(1);
        $pizza5->ingredients()->attach(2);
        $pizza5->ingredients()->attach(3);
        $pizza5->ingredients()->attach(6);

        $pizza6 = Pizza::find(6);
        $pizza6->ingredients()->attach(1);
        $pizza6->ingredients()->attach(2);
        $pizza6->ingredients()->attach(7);
        $pizza6->ingredients()->attach(8);

        
        $pizza7 = Pizza::find(7);
        $pizza7->ingredients()->attach(1);
        $pizza7->ingredients()->attach(2);
        $pizza7->ingredients()->attach(9);
        $pizza7->ingredients()->attach(10);

        $pizza8 = Pizza::find(8);
        
        $pizza8->ingredients()->attach(1);
        $pizza8->ingredients()->attach(2);
        $pizza8->ingredients()->attach(4);
        $pizza8->ingredients()->attach(9);
        
        
        $pizza9 = Pizza::find(9);
        $pizza9->ingredients()->attach(1);
        $pizza9->ingredients()->attach(2);
        $pizza9->ingredients()->attach(3);
        $pizza9->ingredients()->attach(4);
        
        $pizza10 = Pizza::find(10);
        $pizza10->ingredients()->attach(1);
        $pizza10->ingredients()->attach(2);
        $pizza10->ingredients()->attach(3);
        $pizza10->ingredients()->attach(11);

        $pizza11 = Pizza::find(11);
        $pizza11->ingredients()->attach(1);
        $pizza11->ingredients()->attach(2);
        $pizza11->ingredients()->attach(3);
        $pizza11->ingredients()->attach(7);

        $pizza12 = Pizza::find(12);
        $pizza12->ingredients()->attach(1);
        $pizza12->ingredients()->attach(2);
        $pizza12->ingredients()->attach(12);
        $pizza12->ingredients()->attach(13);
        $pizza12->ingredients()->attach(8);
        $pizza12->ingredients()->attach(5);
    }
}

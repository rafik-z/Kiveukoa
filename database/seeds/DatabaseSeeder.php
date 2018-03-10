<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FoodTypesSeeder::class);
        $this->call(RestaurantsSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(DishesSeeder::class);
    }
}

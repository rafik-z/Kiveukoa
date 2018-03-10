<?php

use Illuminate\Database\Seeder;

class FoodTypesSeeder extends Seeder
{
    public function run()
    {
        $foodTypes = [
            ('Burgers'),
            ('Japonais'),
            ('Asian fusion'),
            ('Chinois'),
            ('Libanais'),
            ('Cuisine du monde'),
            ('Italien')
        ];

        foreach ($foodTypes as $foodType) {
            App\FoodType::create([
                'name' => $foodType,
                'slug' => str_slug($foodType),
                'userId' => 1
            ]);
        }
    }
}

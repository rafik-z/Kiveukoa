<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{

    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            App\Menu::create([
                'name' => 'Midi',
                'restaurantId' => $i+1,
                'userId' => 1
            ]);

            App\Menu::create([
                'name' => 'Soir',
                'restaurantId' => $i+1,
                'userId' => 1
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{

    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            App\Menu::create([
                'name' => 'Midi',
                'restaurant_id' => $i+1,
                'user_id' => 1
            ]);

            App\Menu::create([
                'name' => 'Soir',
                'restaurant_id' => $i+1,
                'user_id' => 1
            ]);
        }
    }
}

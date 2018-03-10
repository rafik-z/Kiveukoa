<?php

use Illuminate\Database\Seeder;

class DishesSeeder extends Seeder
{

    public function run()
    {
        $dishesName=[
            ('Poulet braisé'),
            ('Boeuf braisé'),
            ('Poisson braisé'),
            ('Volaille en croûte'),
            ('Canard sauvage'),
            ('Nems fusion'),
            ('Pizza à la seiche'),
            ('Calamar à la roumaine'),
            ('Veau braisé'),
            ('Pizza braisée'),
            ('Burger braisé'),
            ('Popcorn de museau de porc'),
            ('Verre d\'eau'),
            ('Mille feuilles aux cépes'),
            ('Bol de lait'),
            ('Café'),
            ('Café allongé'),
            ('Spaghettis carbonara'),
            ('Fusili bolognaise'),
            ('Penne Arabiatta'),
            ('Coquillettes 4 fromages'),
            ('Blanquette de veau'),
            ('Choucroute'),
            ('Choucroute royale'),
            ('Choucroute de la mer'),
            ('Choucroute du pére'),
            ('Choucroute montagnare'),
            ('Tartiflette'),
            ('Tartiflette au tofu')
        ];

        for ($i = 0; $i<14; $i++){
            for($j =0; $j< 2; $j++){
                App\Dish::create([
                    'name' => $dishesName[rand(1,28)],
                    'price' => rand(1,45),
                    'menuId' => $i+1
                ]);
            }
        }

    }
}

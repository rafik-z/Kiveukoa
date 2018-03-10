<?php

use Illuminate\Database\Seeder;

class RestaurantsSeeder extends Seeder
{
    public function run()
    {
        $restaurantNames = [
            ('Aux 1001 nems'),
            ('Le cédre royal'),
            ('French fast bakery Limited'),
            ('La centrale'),
            ('Chez Pépé et Mémé'),
            ('Viens donc voir par là'),
            ('Apoum Bapoum')
        ];

        $descriptions = [
            ('Pellentesque ornare porta lorem sit amet aliquet. Etiam vestibulum nec eros molestie volutpat. Suspendisse maximus pulvinar volutpat. Quisque laoreet mollis ligula non imperdiet. Aliquam erat volutpat. Proin in tincidunt mi. Nunc commodo ligula vel nunc maximus, a imperdiet tortor malesuada. Morbi a lacus velit. In tempus finibus hendrerit. Suspendisse vel.'),
            ('Quisque commodo lobortis libero. Maecenas turpis eros, gravida id malesuada nec, pretium eget orci. Proin mattis cursus enim, id bibendum massa tempus et. Sed in condimentum eros. Quisque varius, lectus at accumsan suscipit, orci dolor rhoncus neque, sed sodales sem lacus eget nunc. Donec eros tellus, rhoncus a dignissim at.'),
            ('Praesent sit amet libero porttitor, aliquam neque vel, vulputate quam. Vestibulum ullamcorper erat et lorem semper semper. In at lectus ut nisi blandit lobortis et vitae libero. Curabitur tincidunt dolor ac felis ultricies dignissim. Phasellus ut egestas magna. Morbi id lacus lorem. Pellentesque porttitor turpis vel varius tristique. Nulla posuere.'),
            ('Curabitur quis fringilla ipsum. Nullam interdum lacinia nisi, eu euismod lacus ultricies et. Sed luctus lectus eget finibus malesuada. Maecenas non sem libero. Integer accumsan semper eros, eget suscipit orci condimentum vitae. Fusce nulla tellus, sollicitudin nec pellentesque non, vehicula sagittis tellus. Nunc finibus diam vitae porta accumsan. Aenean eget.'),
            ('Ut non maximus magna, sed tincidunt mauris. Aenean consectetur rhoncus hendrerit. Cras eget imperdiet ligula, eu eleifend orci. Vivamus nec nisi enim. Donec augue nibh, dapibus in pulvinar sed, laoreet ut neque. Donec ultrices arcu et eros mattis rhoncus. Maecenas consequat sem sed dolor ornare elementum. Nulla porta mauris lobortis.'),
            ('Aenean lacinia tellus sit amet tristique posuere. Vivamus auctor eu nisl at dictum. Morbi in nunc consequat, vestibulum orci vitae, posuere ligula. Ut commodo eleifend turpis sit amet scelerisque. In vel ornare odio. Vivamus elementum venenatis risus, vel egestas tellus commodo quis. Vestibulum ultricies odio vel sapien luctus mattis. Integer.'),
            ('Cras ultrices in est at pharetra. Aenean tristique purus a fermentum volutpat. Nullam mattis ac massa sit amet ullamcorper. Aenean mattis, nunc id eleifend sagittis, neque nibh rhoncus ante, vel interdum neque tortor sit amet erat. Mauris a ipsum sem. Nam eu libero arcu. Aenean eu risus quam. Integer aliquet.')
        ];

        $addresses = [
            ('97 route de Madison'),
            ('105 route de Memphis'),
            ('21 jump street'),
            ('22 jump street'),
            ('187 impasse du crime'),
            ('999 rue Damien'),
            ('123 quartier sinksisse')
        ];

        for ($i = 0; $i < 7; $i++) {
            App\Restaurant::create([
                'name' => $restaurantNames[$i],
                'slug' => str_slug($restaurantNames[$i]),
                'description' => $descriptions[$i],
                'address' => $addresses[$i],
                'user_id' => 1,
                'food_type_id' => rand(1,7)
            ]);
        }
    }
}
